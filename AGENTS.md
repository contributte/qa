# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is `contributte/qa` - a PHP coding standards package providing strict, tuned rulesets for PHP_CodeSniffer. It's built on top of `squizlabs/php_codesniffer` and `slevomat/coding-standard`.

## Commands

```bash
# Install dependencies
make install

# Run all tests
make tests

# Run a specific test file
vendor/bin/tester -s -p php --colors 1 -C tests/Cases/RulesetTest.phpt

# Generate test snapshots (after modifying rulesets)
php bin/snapshots
php bin/snapshots --set=8.4        # Generate only specific set
php bin/snapshots --sniffs         # Generate only sniff snapshots

# Regenerate ruleset documentation
make docs-rulesets

# Test code against a ruleset
vendor/bin/phpcs --standard=ruleset-8.4.xml path/to/code
vendor/bin/phpcbf --standard=ruleset-8.4.xml path/to/code  # Auto-fix
```

## Architecture

**Rulesets:**
- `ruleset.xml` - Base ruleset containing all sniff configurations (Generic, PEAR, PSR2, Squiz, Slevomat)
- `ruleset-8.x.xml` - PHP version-specific rulesets that reference base ruleset with appropriate `php_version` config
- Version rulesets only set `php_version` and include base ruleset

**Testing:**
- Uses Nette Tester framework (`.phpt` files)
- Snapshot-based testing: fixtures are scanned and compared against expected JSON output
- `tests/Sets/{version}/` - Contains `Fixtures/` PHP files, `ruleset.xml`, and `snapshot.json`
- `tests/Sniffs/` - Per-sniff test cases with `good.php`, `bad.php`, and snapshot files

**Bin scripts:**
- `bin/codesniffer` - Wrapper that auto-discovers ruleset files and runs phpcs
- `bin/codefixer` - Similar wrapper for phpcbf
- `bin/snapshots` - Generates JSON snapshots for tests

## Code Style

Uses tabs for indentation (4-space equivalent). The ruleset enforces strict typing with `declare(strict_types=1)` on the first line.

## Sniff Management

When adding, removing, or updating a sniff:

1. **Modify ruleset.xml** - Add/remove/update the sniff rule reference
2. **Update tests in `tests/Sniffs/{Category.Subcategory}/{SniffName}/`**:
   - Create/update `good.php` (code that passes the sniff)
   - Create/update `bad.php` (code that fails the sniff)
   - Create/update `good.ruleset.xml` and `bad.ruleset.xml` with the sniff reference
3. **Update Makefile**: manage rulsets
4. **Regenerate snapshots**: `php bin/snapshots --sniffs`
5. **Regenerate documentation**: `make docs`
6. **Run tests**: `make tests`

## Sniff Parameter Testing

Helper scripts in `.dev/` for discovering and testing sniff parameters:

```bash
# List all sniffs and their configurable properties
.dev/list-sniff-options.sh
.dev/list-sniff-options.sh --filter=LineLength      # Filter by sniff name
.dev/list-sniff-options.sh --standard=Generic       # Filter by standard

# List sniffs that already have custom parameter tests
.dev/list-tested-sniffs.sh

# List sniffs with configurable options but no custom tests yet
.dev/list-untested-sniffs.sh
```

### Creating Custom Parameter Tests

For sniffs with configurable properties, create custom tests in `tests/Sniffs/{Standard.Category}/{SniffName}/`:

1. **Find sniff properties**: Run `php bin/inspect --filter=SniffName` to see available properties
2. **Create test files** for each parameter configuration:
   - `custom1.php` - PHP code that exercises the parameter
   - `custom1.ruleset.xml` - Ruleset with the specific property value
   - `custom2.php` / `custom2.ruleset.xml` - Additional configuration variants
3. **Regenerate snapshots**: `php bin/snapshots --sniffs`
4. **Run tests**: `make tests`

**Example custom test structure:**

```
tests/Sniffs/Generic.Files/LineLength/
├── good.php                  # Standard good test
├── good.ruleset.xml
├── bad.php                   # Standard bad test
├── bad.ruleset.xml
├── custom1.php               # Test lineLimit=120
├── custom1.ruleset.xml
├── custom2.php               # Test ignoreComments=true
└── custom2.ruleset.xml
```

**Example custom1.ruleset.xml:**

```xml
<?xml version="1.0" encoding="UTF-8"?>
<ruleset name="Test Generic.Files.LineLength - custom limit">
	<rule ref="Generic.Files.LineLength">
		<properties>
			<property name="lineLimit" value="120"/>
		</properties>
	</rule>
</ruleset>
```

**PHP test file conventions:**
- First line: `<?php declare(strict_types = 1);`
- Second line: Comment explaining test (e.g., `// Test: lineLimit=120`)
- Use tabs for indentation
- Include code that exercises the specific parameter being tested
