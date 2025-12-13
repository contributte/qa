#!/bin/bash
# Lists all sniffs that have custom parameter tests in tests/Sniffs/

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"

echo "=== Sniffs with custom parameter tests ==="
echo ""

find "$ROOT_DIR/tests/Sniffs" -name "custom*.ruleset.xml" -exec grep -h 'rule ref=' {} \; 2>/dev/null \
	| sed 's/.*ref="//;s/".*//' \
	| sort -u

echo ""
echo "Total: $(find "$ROOT_DIR/tests/Sniffs" -name "custom*.ruleset.xml" -exec grep -h 'rule ref=' {} \; 2>/dev/null | sed 's/.*ref="//;s/".*//' | sort -u | wc -l | tr -d ' ') sniffs with custom tests"
