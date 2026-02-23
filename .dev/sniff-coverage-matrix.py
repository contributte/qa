#!/usr/bin/env python3

from __future__ import annotations

import csv
import re
import subprocess
from collections import defaultdict
from pathlib import Path


ROOT = Path(__file__).resolve().parent.parent
REPORTS = ROOT / ".reports"
SNIFFS_ROOT = ROOT / "tests" / "Sniffs"

SNIFF_RE = re.compile(r"^\s*([A-Z][A-Za-z0-9]*\.[A-Za-z0-9_]+\.[A-Za-z0-9_]+)\s*$")
RULE_REF_RE = re.compile(r"<rule\s+ref=\"([^\"]+)\"")


def run_phpcs_enabled() -> list[str]:
    result = subprocess.run(
        ["vendor/bin/phpcs", "--standard=ruleset.xml", "-e"],
        cwd=ROOT,
        text=True,
        capture_output=True,
        check=True,
    )

    sniffs: list[str] = []
    for line in result.stdout.splitlines():
        match = SNIFF_RE.match(line)
        if match:
            sniffs.append(match.group(1))

    return sorted(set(sniffs))


def build_ref_directory_map() -> dict[str, set[Path]]:
    refs: dict[str, set[Path]] = defaultdict(set)

    for ruleset in SNIFFS_ROOT.glob("**/*.ruleset.xml"):
        content = ruleset.read_text(encoding="utf-8")
        for ref in RULE_REF_RE.findall(content):
            if "." in ref:
                refs[ref].add(ruleset.parent)

    return refs


def summarize_sniff(ref: str, directories: set[Path]) -> dict[str, object]:
    fixture_paths: set[Path] = set()
    has_good = False
    has_bad = False
    custom_count = 0

    for directory in sorted(directories):
        for php_file in directory.glob("*.php"):
            fixture_paths.add(php_file)
            if php_file.name == "good.php":
                has_good = True
            elif php_file.name == "bad.php":
                has_bad = True
            elif php_file.name.startswith("custom"):
                custom_count += 1

    return {
        "enabled_sniff": ref,
        "has_tests": bool(directories),
        "fixture_count": len(fixture_paths),
        "has_good": has_good,
        "has_bad": has_bad,
        "custom_count": custom_count,
        "directories": ";".join(str(path.relative_to(ROOT)) for path in sorted(directories)),
    }


def main() -> None:
    enabled = run_phpcs_enabled()
    refs = build_ref_directory_map()

    REPORTS.mkdir(parents=True, exist_ok=True)
    csv_path = REPORTS / "sniff-coverage-matrix.csv"
    md_path = REPORTS / "sniff-coverage-summary.md"

    rows = [summarize_sniff(ref, refs.get(ref, set())) for ref in enabled]

    with csv_path.open("w", newline="", encoding="utf-8") as handle:
        writer = csv.DictWriter(
            handle,
            fieldnames=[
                "enabled_sniff",
                "has_tests",
                "fixture_count",
                "has_good",
                "has_bad",
                "custom_count",
                "directories",
            ],
        )
        writer.writeheader()
        writer.writerows(rows)

    total = len(rows)
    tested = sum(1 for row in rows if row["has_tests"])
    missing = [row for row in rows if not row["has_tests"]]
    weak = [
        row
        for row in rows
        if row["has_tests"] and (not row["has_good"] or not row["has_bad"] or row["fixture_count"] == 1)
    ]
    strong = [
        row
        for row in rows
        if row["has_tests"] and row["has_good"] and row["has_bad"] and row["custom_count"] > 0
    ]

    with md_path.open("w", encoding="utf-8") as handle:
        handle.write("# Sniff Coverage Summary\n\n")
        handle.write(f"- Total enabled sniffs: {total}\n")
        handle.write(f"- With dedicated tests: {tested}\n")
        handle.write(f"- Missing dedicated tests: {len(missing)}\n")
        handle.write(f"- Weak examples: {len(weak)}\n")
        handle.write(f"- Strong examples (good+bad+custom): {len(strong)}\n\n")

        if missing:
            handle.write("## Missing\n")
            for row in missing:
                handle.write(f"- `{row['enabled_sniff']}`\n")
            handle.write("\n")

        if weak:
            handle.write("## Weak Examples\n")
            for row in weak:
                handle.write(
                    f"- `{row['enabled_sniff']}` (fixtures={row['fixture_count']}, good={row['has_good']}, bad={row['has_bad']})\n"
                )
            handle.write("\n")

    print(f"Generated {csv_path}")
    print(f"Generated {md_path}")


if __name__ == "__main__":
    main()
