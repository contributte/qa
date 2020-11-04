![](https://heatbadger.now.sh/github/readme/contributte/qa/)

<p align=center>
  <a href="https://github.com/contributte/qa/actions"><img src="https://badgen.net/github/checks/contributte/qa/master?cache=300"></a>
  <a href="https://coveralls.io/r/contributte/qa"><img src="https://badgen.net/coveralls/c/github/contributte/qa?cache=300"></a>
  <a href="https://packagist.org/packages/contributte/qa"><img src="https://badgen.net/packagist/dm/contributte/qa"></a>
  <a href="https://packagist.org/packages/contributte/qa"><img src="https://badgen.net/packagist/v/contributte/qa"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/qa"><img src="https://badgen.net/packagist/php/contributte/qa"></a>
  <a href="https://github.com/contributte/qa"><img src="https://badgen.net/github/license/contributte/qa"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Usage

1. Install by running `composer require --dev contributte/qa` command.

2. As part of this repository there is a working codesniffer example that sniffs `/tests` directory. Copy our configuration file located in `tests/codesniffer.xml` and edit it to your project's needs.

3. Run codesniffer `vendor/bin/phpcs --standard=tests/codesniffer.xml tests`. As arguments, use your copied config file and directories to be scanned.

4. Fix problems effortlessly with `phpcbf` executable e.g. `vendor/bin/phpcs --standard=tests/codesniffer.xml tests`.

5. Your code now shines! :sun_with_face:

## Versions

| State  | Branch | Version    | PHP  |Readme |
|--------|--------|------------|------|-------|
| dev    | master | 0.1.0     | ^7.4  |-      |

## Cheatsheet

For advanced usage of codesniffer you can find all details in their [wiki](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#table-of-contents).
However, working with codesniffer on daily basis you will often find your code to be unable to conform to the coding standard. That is why we highlighted ways how to cope with it for you.

**Ignoring files**

```php
// phpcs:ignoreFile

echo 'This whole file is suppressed';
```

**Ignoring part of a file**

```php
// phpcs:disable
echo 'Everything in between is ignored';
// phpcs:enable

// phpcs:disable Sniff.Name
echo 'Only Sniff.Name sniff is ignored';
// phpcs:enable Sniff.Name
```

**Ignoring specific lines**

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

**Ignoring all rules in path**

```xml
<ruleset name="Your project">
    <!-- Exclude all rules in path -->
    <exclude-pattern>app/FileToSkip.php</exclude-pattern>
    <exclude-pattern>app/*Test\.php</exclude-pattern>
    <exclude-pattern>tests/</exclude-pattern>
</ruleset>
```

**Ignoring specific rules in path**

```xml
<rule ref="SlevomatCodingStandard.Namespaces.UnusedUses.MismatchingCaseSensitivity">
    <exclude-pattern>src/deprecated</exclude-pattern>
</rule>
```

**Ignoring rules from ruleset**

```xml
<rule ref="./vendor/contributte/qa/ruleset.xml">
    <!-- Exclude specific rules from imported ruleset -->
    <exclude name="Generic.PHP.LowerCaseConstant"/>
    <exclude name="Squiz.Commenting.FunctionComment.WrongStyle"/>
</rule>
```

**Configuring your own rule**

```xml
<!-- Spaces instead of tabs -->
<rule ref="Generic.WhiteSpace.ScopeIndent">
    <properties>
        <property name="indent" value="4"/>
        <property name="tabIndent" value="false"/>
</properties>
</rule>
```

## Development

See [how to contribute](https://contributte.org) to this package. This package is currently maintained by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

<a href="https://github.com/vody105">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/22433893?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.com/partners) **contributte** development team.
Also thank you for using this package. Thanks.
