#!/bin/bash

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"
REPORT_DIR="$ROOT_DIR/.reports"
REPORT_FILE="$REPORT_DIR/ruleset-diff.md"

mkdir -p "$REPORT_DIR"

tmp_dir=$(mktemp -d)
trap 'rm -rf "$tmp_dir"' EXIT

rulesets=("ruleset.xml" "ruleset-8.2.xml" "ruleset-8.3.xml" "ruleset-8.4.xml" "ruleset-8.5.xml" "ruleset-next.xml")

extract_sniffs() {
	local standard="$1"
	vendor/bin/phpcs --standard="$standard" -e \
		| awk '$1 ~ /^[A-Z][A-Za-z0-9]*\.[A-Za-z0-9]+\.[A-Za-z0-9]+$/ {print $1}'
}

for ruleset in "${rulesets[@]}"; do
	extract_sniffs "$ruleset" | sort -u > "$tmp_dir/$ruleset.txt"
done

{
	echo "# Ruleset Diff Report"
	echo
	echo "Generated: $(date -u +'%Y-%m-%d %H:%M:%S UTC')"
	echo
	echo "## Sniff Counts"
	echo
	echo "| Ruleset | Sniff count |"
	echo "|---|---:|"
	for ruleset in "${rulesets[@]}"; do
		count=$(wc -l < "$tmp_dir/$ruleset.txt" | tr -d ' ')
		echo "| \`$ruleset\` | $count |"
	done
	echo

	echo "## Differences vs ruleset.xml"
	echo
	for ruleset in "${rulesets[@]}"; do
		if [ "$ruleset" = "ruleset.xml" ]; then
			continue
		fi

		added=$(comm -13 "$tmp_dir/ruleset.xml.txt" "$tmp_dir/$ruleset.txt" || true)
		removed=$(comm -23 "$tmp_dir/ruleset.xml.txt" "$tmp_dir/$ruleset.txt" || true)

		echo "### \`$ruleset\`"
		echo
		if [ -z "$added" ] && [ -z "$removed" ]; then
			echo "No sniff-list differences compared to \`ruleset.xml\`."
			echo
			continue
		fi

		if [ -n "$added" ]; then
			echo "Added sniffs:"
			echo '```'
			echo "$added"
			echo '```'
			echo
		fi

		if [ -n "$removed" ]; then
			echo "Removed sniffs:"
			echo '```'
			echo "$removed"
			echo '```'
			echo
		fi
	done
} > "$REPORT_FILE"

echo "Generated $REPORT_FILE"
