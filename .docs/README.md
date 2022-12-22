# Contributte / QA

## Installation

Install by running `composer require --dev contributte/qa` command.

## Example

Take a look at our template repository [contributte/bare](https://github.com/contributte/bare/).

```xml
<?xml version="1.0" encoding="UTF-8"?>
<ruleset name="Contributte" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="vendor/squizlabs/php_codesniffer/phpcs.xsd">

  <!-- Check only whitelist files -->
  <arg name="extensions" value="php,phpt"/>

  <!-- Enforce encoding -->
  <arg name="encoding" value="utf-8"/>

  <!-- Show progress -->
  <arg value="ps"/>

  <!-- Nice colors -->
  <arg name="colors"/>

  <!-- Strip filepaths to basepath -->
  <arg name="basepath" value="./"/>

  <!-- Feel the speed -->
  <arg name="parallel" value="16"/>

  <!-- Rulesets -->
  <rule ref="./vendor/contributte/qa/ruleset-8.1.xml"/>
  <!-- <rule ref="./vendor/contributte/qa/ruleset-8.0.xml"/> -->
  <!-- <rule ref="./vendor/contributte/qa/ruleset-next.xml"/> -->

  <!-- Rules -->
  <rule ref="SlevomatCodingStandard.Files.TypeNameMatchesFileName">
    <properties>
      <property name="rootNamespaces" type="array">
        <element key="src" value="Contributte\Package"/>
      </property>
    </properties>
  </rule>

  <!-- Excludes -->
  <exclude-pattern>/tests/tmp</exclude-pattern>
</ruleset>
```

## Usage

- Analyse your codebase with `phpcs` executable e.q. `vendor/bin/phpcs --standard=ruleset.xml app src tests`, as arguments, use your copied config file and directories to be scanned.
- Fix problems effortlessly with `phpcbf` executable e.g. `vendor/bin/phpcbf --standard=codesniffer.xml app src tests`.
- Your code now shines! 🌞

## Cheatsheet

For advanced usage of codesniffer you can find all details in their [wiki](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#table-of-contents). However, working with codesniffer on daily basis you will often find your code
to be unable to conform to the coding standard. That is why we highlighted ways how to cope with it for you.

### Ignoring

#### Ignoring files

```php
// phpcs:ignoreFile

echo 'This whole file is suppressed';
```

#### Ignoring part of a file

```php
// phpcs:disable
echo 'Everything in between is ignored';
// phpcs:enable

// phpcs:disable Sniff.Name
echo 'Only Sniff.Name sniff is ignored';
// phpcs:enable Sniff.Name
```

#### Ignoring specific lines

```php
// ignores 2 lines: line with comment and following one
// phpcs:ignore
echo 'Ignored line';

echo 'Ignored line'; // phpcs:ignore Name.Of.The.Sniff
echo 'Ignored line';
```

```php
/**
 * Method is inherited from codebase without typehint so you cannot add typehint.
 *
 * @param string $key
 * @phpcsSuppress SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint
 */
protected function($key): void {}
```

#### Ignoring all rules in path

```xml

<ruleset name="Your project">
  <!-- Exclude all rules in path -->
  <exclude-pattern>app/FileToSkip.php</exclude-pattern>
  <exclude-pattern>app/*Test\.php</exclude-pattern>
  <exclude-pattern>tests/</exclude-pattern>
</ruleset>
```

#### Ignoring specific rules in path

```xml

<rule ref="SlevomatCodingStandard.Namespaces.UnusedUses.MismatchingCaseSensitivity">
  <exclude-pattern>src/deprecated</exclude-pattern>
</rule>
```

#### Ignoring rules from ruleset

```xml

<rule ref="./vendor/contributte/qa/ruleset.xml">
  <!-- Exclude specific rules from imported ruleset -->
  <exclude name="Generic.PHP.LowerCaseConstant"/>
  <exclude name="Squiz.Commenting.FunctionComment.WrongStyle"/>
</rule>
```

### Configuring

#### Configuring your own rule

```xml
<!-- Spaces instead of tabs -->
<rule ref="Generic.WhiteSpace.ScopeIndent">
  <properties>
    <property name="indent" value="4"/>
    <property name="tabIndent" value="false"/>
  </properties>
</rule>
```
