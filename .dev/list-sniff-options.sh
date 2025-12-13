#!/bin/bash
# Lists all sniffs and their configurable options using bin/inspect

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"

# Run bin/inspect with optional filters
php "$ROOT_DIR/bin/inspect" "$@"
