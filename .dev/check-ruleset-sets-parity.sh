#!/bin/bash

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"

tmp_expected=$(mktemp)
tmp_actual=$(mktemp)
trap 'rm -f "$tmp_expected" "$tmp_actual"' EXIT

for ruleset in "$ROOT_DIR"/ruleset-*.xml; do
	name=$(basename "$ruleset")
	name=${name#ruleset-}
	name=${name%.xml}
	echo "$name"
done | sort -u > "$tmp_expected"

for set_dir in "$ROOT_DIR"/tests/Sets/*; do
	if [ -d "$set_dir" ]; then
		echo "$(basename "$set_dir")"
	fi
done | sort -u > "$tmp_actual"

missing_sets=$(comm -23 "$tmp_expected" "$tmp_actual" || true)
orphan_sets=$(comm -13 "$tmp_expected" "$tmp_actual" || true)

if [ -n "$missing_sets" ] || [ -n "$orphan_sets" ]; then
	echo "Ruleset/set parity check failed."

	if [ -n "$missing_sets" ]; then
		echo "Missing tests/Sets directories for rulesets:"
		echo "$missing_sets"
	fi

	if [ -n "$orphan_sets" ]; then
		echo "tests/Sets directories without matching ruleset-*.xml:"
		echo "$orphan_sets"
	fi

	exit 1
fi

echo "Ruleset/set parity check passed."
