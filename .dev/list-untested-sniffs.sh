#!/bin/bash
# Lists sniffs that have configurable options but no custom parameter tests yet

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"

# Get sniffs with configurable properties (from bin/inspect)
php "$ROOT_DIR/bin/inspect" 2>&1 \
	| perl -pe 's/\e\[[0-9;]*m//g' \
	| awk '/^[A-Z].*\.[A-Z]/{sniff=$1} /^  [a-zA-Z]/{print sniff}' \
	| sort -u > /tmp/sniffs_with_props.txt

# Get sniffs with custom tests
find "$ROOT_DIR/tests/Sniffs" -name "custom*.ruleset.xml" -exec grep -h 'rule ref=' {} \; 2>/dev/null \
	| sed 's/.*ref="//;s/".*//' \
	| sort -u > /tmp/sniffs_with_custom.txt

echo "=== Sniffs with options but no custom tests ==="
echo ""

comm -23 /tmp/sniffs_with_props.txt /tmp/sniffs_with_custom.txt

echo ""
TOTAL=$(comm -23 /tmp/sniffs_with_props.txt /tmp/sniffs_with_custom.txt | wc -l | tr -d ' ')
echo "Total: $TOTAL sniffs need custom parameter tests"

# Cleanup
rm -f /tmp/sniffs_with_props.txt /tmp/sniffs_with_custom.txt
