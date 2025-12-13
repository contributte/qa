# Sniff Parameters Reference

This document lists all sniffs in `ruleset.xml` that have configurable parameters (properties).

## Generic Sniffs

### Generic.PHP.ForbiddenFunctions

Disallows usage of certain functions with optional alternatives.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `forbiddenFunctions` | array | `sizeof => count, delete => unset` | Map of forbidden functions to alternatives (or `null` if no alternative) |
| `error` | boolean | `true` | Report as error (true) or warning (false) |

**Current configuration:**
```xml
<property name="forbiddenFunctions" type="array">
    <element key="chop" value="rtrim"/>
    <element key="compact" value="null"/>
    <element key="sizeof" value="count"/>
    <!-- ... 21 total mappings -->
</property>
```

### Generic.Strings.UnnecessaryStringConcat

Checks for unnecessary string concatenation.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `allowMultiline` | boolean | `false` | Allow string concatenation across multiple lines |

**Current configuration:** `allowMultiline=true`

### Generic.WhiteSpace.ScopeIndent

Checks scope indentation.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `indent` | integer | `4` | Number of spaces per indent level |
| `tabIndent` | boolean | `false` | Use tabs instead of spaces |
| `exact` | boolean | `false` | Require exact indent (vs minimum) |
| `ignoreIndentationTokens` | array | `[]` | Tokens to ignore indentation checks |

**Current configuration:** `indent=4, tabIndent=true`

## Squiz Sniffs

### Squiz.Strings.ConcatenationSpacing

Checks spacing around concatenation operator.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacing` | integer | `0` | Number of spaces around `.` operator |
| `ignoreNewlines` | boolean | `false` | Ignore newlines in multi-line concatenation |

**Current configuration:** `spacing=1, ignoreNewlines=true`

### Squiz.WhiteSpace.FunctionSpacing

Checks blank lines between functions.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacing` | integer | `2` | Number of blank lines between functions |
| `spacingBeforeFirst` | integer | `2` | Blank lines before first function |
| `spacingAfterLast` | integer | `2` | Blank lines after last function |

**Current configuration:** `spacing=1`

### Squiz.WhiteSpace.OperatorSpacing

Checks spacing around operators.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `ignoreNewlines` | boolean | `false` | Ignore newlines in multi-line expressions |

**Current configuration:** `ignoreNewlines=true`

### Squiz.WhiteSpace.SuperfluousWhitespace

Checks for unnecessary whitespace.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `ignoreBlankLines` | boolean | `true` | Ignore whitespace on blank lines |

**Current configuration:** `ignoreBlankLines=false`

## SlevomatCodingStandard.Classes Sniffs

### SlevomatCodingStandard.Classes.ClassConstantVisibility

Requires visibility for class constants.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `fixable` | boolean | `false` | Whether missing visibility is auto-fixable |

**Current configuration:** `fixable=true`

### SlevomatCodingStandard.Classes.EmptyLinesAroundClassBraces

Checks empty lines around class braces.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `linesCountAfterOpeningBrace` | integer | `0` | Blank lines after opening brace |
| `linesCountBeforeClosingBrace` | integer | `0` | Blank lines before closing brace |

**Current configuration:** `linesCountAfterOpeningBrace=1, linesCountBeforeClosingBrace=1`

### SlevomatCodingStandard.Classes.ClassMemberSpacing

Checks spacing between class members.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `linesCountBetweenMembers` | integer | `1` | Blank lines between class members |

**Current configuration:** `linesCountBetweenMembers=1`

### SlevomatCodingStandard.Classes.PropertySpacing

Checks spacing before properties.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `minLinesCountBeforeWithComment` | integer | `0` | Min lines before property with comment |
| `maxLinesCountBeforeWithComment` | integer | `1` | Max lines before property with comment |
| `minLinesCountBeforeWithoutComment` | integer | `0` | Min lines before property without comment |
| `maxLinesCountBeforeWithoutComment` | integer | `1` | Max lines before property without comment |

**Current configuration:** All set to `1`

### SlevomatCodingStandard.Classes.ClassStructure

Enforces class member ordering.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `groups` | array | `[]` | Ordered list of member groups |

**Current configuration:** 25 groups defined (uses, enum cases, constants, properties, constructor, methods by visibility)

## SlevomatCodingStandard.Commenting Sniffs

### SlevomatCodingStandard.Commenting.ForbiddenAnnotations

Disallows certain annotations.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `forbiddenAnnotations` | array | `[]` | List of forbidden annotations |

**Current configuration:** `@todo, @author, @copyright, @created, @license, @package, @since, @subpackage, @version`

### SlevomatCodingStandard.Commenting.ForbiddenComments

Disallows comments matching patterns.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `forbiddenCommentPatterns` | array | `[]` | Regex patterns for forbidden comments |

**Current configuration:** 3 patterns (constructor/destructor, "Created by", getter/setter)

### SlevomatCodingStandard.Commenting.UselessFunctionDocComment

Detects useless function doc comments.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `traversableTypeHints` | array | `[]` | Types considered traversable |

**Current configuration:** `Traversable`

## SlevomatCodingStandard.Namespaces Sniffs

### SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly

Requires use statements for referenced names.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `allowFullyQualifiedExceptions` | boolean | `true` | Allow FQ exceptions |
| `allowFallbackGlobalConstants` | boolean | `true` | Allow fallback global constants |
| `allowFallbackGlobalFunctions` | boolean | `true` | Allow fallback global functions |
| `allowFullyQualifiedGlobalClasses` | boolean | `false` | Allow FQ global classes |
| `allowFullyQualifiedGlobalConstants` | boolean | `false` | Allow FQ global constants |
| `allowFullyQualifiedGlobalFunctions` | boolean | `false` | Allow FQ global functions |
| `allowFullyQualifiedNameForCollidingClasses` | boolean | `false` | Allow FQ for colliding classes |
| `allowFullyQualifiedNameForCollidingConstants` | boolean | `false` | Allow FQ for colliding constants |
| `allowFullyQualifiedNameForCollidingFunctions` | boolean | `false` | Allow FQ for colliding functions |
| `searchAnnotations` | boolean | `false` | Search in annotations |

**Current configuration:** Custom boolean settings with `searchAnnotations=true`

### SlevomatCodingStandard.Namespaces.UnusedUses

Detects unused use statements.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `searchAnnotations` | boolean | `false` | Search for usage in annotations |
| `ignoredAnnotationNames` | array | `[]` | Annotations to ignore |

**Current configuration:** `searchAnnotations=true`, ignores `@testCase`

### SlevomatCodingStandard.Namespaces.UseSpacing

Checks spacing around use statements.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `linesCountBeforeFirstUse` | integer | `1` | Blank lines before first use |
| `linesCountAfterLastUse` | integer | `1` | Blank lines after last use |
| `linesCountBetweenUseTypes` | integer | `0` | Blank lines between use types |

**Current configuration:** `linesCountAfterLastUse=1, linesCountBeforeFirstUse=1, linesCountBetweenUseTypes=0`

## SlevomatCodingStandard.TypeHints Sniffs

### SlevomatCodingStandard.TypeHints.DeclareStrictTypes

Requires strict_types declaration.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `declareOnFirstLine` | boolean | `false` | Declare on same line as opening tag |
| `linesCountBeforeDeclare` | integer | `1` | Blank lines before declare |
| `linesCountAfterDeclare` | integer | `1` | Blank lines after declare |
| `spacesCountAroundEqualsSign` | integer | `1` | Spaces around `=` sign |

**Current configuration:** `declareOnFirstLine=1`

### SlevomatCodingStandard.TypeHints.ReturnTypeHintSpacing

Checks return type hint spacing.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacesCountBeforeColon` | integer | `0` | Spaces before colon |

**Current configuration:** `spacesCountBeforeColon=0`

### SlevomatCodingStandard.TypeHints.ParameterTypeHint

Requires parameter type hints.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `traversableTypeHints` | array | `[]` | Types considered traversable |

**Current configuration:** `Traversable`

### SlevomatCodingStandard.TypeHints.PropertyTypeHint

Requires property type hints.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `traversableTypeHints` | array | `[]` | Types considered traversable |

**Current configuration:** `Traversable`

### SlevomatCodingStandard.TypeHints.ReturnTypeHint

Requires return type hints.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `traversableTypeHints` | array | `[]` | Types considered traversable |

**Current configuration:** `Traversable`

## SlevomatCodingStandard.ControlStructures Sniffs

### SlevomatCodingStandard.ControlStructures.BlockControlStructureSpacing

Checks spacing around control structures.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `controlStructures` | array | `[]` | Control structures to check |
| `linesCountBefore` | integer | `1` | Blank lines before |
| `linesCountAfter` | integer | `1` | Blank lines after |

**Current configuration:** `if, do, while, for, foreach, switch, try`

### SlevomatCodingStandard.ControlStructures.JumpStatementsSpacing

Checks spacing around jump statements.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `jumpStatements` | array | `[]` | Jump statements to check |
| `linesCountBefore` | integer | `1` | Blank lines before |
| `linesCountAfter` | integer | `1` | Blank lines after |

**Current configuration:** `continue, return, throw` with 1 line before/after

### SlevomatCodingStandard.ControlStructures.RequireSingleLineCondition

Requires simple conditions on single line.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `maxLineLength` | integer | `120` | Max line length for single-line conditions |
| `alwaysForSimpleConditions` | boolean | `false` | Always require single line for simple conditions |

**Current configuration:** `maxLineLength=70, alwaysForSimpleConditions=1`

## SlevomatCodingStandard.Arrays Sniffs

### SlevomatCodingStandard.Arrays.SingleLineArrayWhitespace

Checks whitespace in single-line arrays.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacesAroundBrackets` | integer | `0` | Spaces inside brackets |

**Current configuration:** `spacesAroundBrackets=0`

## SlevomatCodingStandard.Operators Sniffs

### SlevomatCodingStandard.Operators.NegationOperatorSpacing

Checks spacing after negation operator.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacesCount` | integer | `0` | Spaces after `!` operator |

**Current configuration:** `spacesCount=0`

## SlevomatCodingStandard.Whitespaces Sniffs

### SlevomatCodingStandard.Whitespaces.DuplicateSpaces

Detects duplicate spaces.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `ignoreSpacesInAnnotation` | boolean | `false` | Ignore spaces in doc comments |
| `ignoreSpacesInComment` | boolean | `false` | Ignore spaces in regular comments |
| `ignoreSpacesInParameters` | boolean | `false` | Ignore spaces in function parameters |

**Current configuration:** `ignoreSpacesInAnnotation=1`

## Generic.Metrics Sniffs

### Generic.Metrics.CyclomaticComplexity

Checks cyclomatic complexity of functions.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `complexity` | integer | `10` | Warning threshold for complexity |
| `absoluteComplexity` | integer | `20` | Error threshold for complexity |

### Generic.Metrics.NestingLevel

Checks nesting level of functions.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `nestingLevel` | integer | `5` | Warning threshold for nesting |
| `absoluteNestingLevel` | integer | `10` | Error threshold for nesting |

## Generic.Files Sniffs

### Generic.Files.LineLength

Checks line length.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `lineLimit` | integer | `80` | Warning threshold for line length |
| `absoluteLineLimit` | integer | `100` | Error threshold for line length |
| `ignoreComments` | boolean | `false` | Ignore comment lines |

## Generic.Formatting Sniffs

### Generic.Formatting.SpaceAfterCast

Checks spacing after type casts.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacing` | integer | `1` | Number of spaces after cast |

### Generic.Formatting.SpaceAfterNot

Checks spacing after negation operator.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacing` | integer | `1` | Number of spaces after `!` |

## Generic.WhiteSpace Sniffs

### Generic.WhiteSpace.ArbitraryParenthesesSpacing

Checks spacing inside arbitrary parentheses.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacing` | integer | `0` | Spaces required inside parentheses |
| `ignoreNewlines` | boolean | `false` | Ignore newlines in parentheses |

## Generic.Functions Sniffs

### Generic.Functions.OpeningFunctionBraceBsdAllman

Requires BSD/Allman style for function braces.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `checkClosures` | boolean | `true` | Check closures as well as functions |

### Generic.Functions.OpeningFunctionBraceKernighanRitchie

Requires K&R style for function braces.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `checkClosures` | boolean | `true` | Check closures as well as functions |

## PEAR.Functions Sniffs

### PEAR.Functions.FunctionCallSignature

Checks function call signature formatting.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `indent` | integer | `4` | Indentation spaces for multi-line calls |
| `allowMultipleArguments` | boolean | `true` | Allow multiple arguments on one line |

## PEAR.WhiteSpace Sniffs

### PEAR.WhiteSpace.ObjectOperatorIndent

Checks indentation of chained method calls.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `indent` | integer | `4` | Indentation spaces for chained calls |

## Squiz.Commenting Sniffs

### Squiz.Commenting.LongConditionClosingComment

Requires closing comment for long conditions.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `lineLimit` | integer | `20` | Lines before requiring closing comment |

## Squiz.Functions Sniffs

### Squiz.Functions.FunctionDeclarationArgumentSpacing

Checks spacing in function declarations.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `equalsSpacing` | integer | `0` | Spaces around equals for default values |

## Squiz.PHP Sniffs

### Squiz.PHP.CommentedOutCode

Detects commented-out code.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `maxPercentage` | integer | `35` | Percentage threshold for detecting code |

## PSR12.ControlStructures Sniffs

### PSR12.ControlStructures.BooleanOperatorPlacement

Checks boolean operator placement in multi-line conditions.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `allowOnly` | string | `null` | Force placement: `first` or `last` |

## SlevomatCodingStandard.Functions Sniffs

### SlevomatCodingStandard.Functions.FunctionLength

Checks function length.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `maxLinesLength` | integer | `null` | Maximum lines per function |

## SlevomatCodingStandard.Complexity Sniffs

### SlevomatCodingStandard.Complexity.Cognitive

Checks cognitive complexity.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `maxComplexity` | integer | `null` | Maximum cognitive complexity |

## SlevomatCodingStandard.Files Sniffs

### SlevomatCodingStandard.Files.LineLength

Checks line length with more options.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `lineLengthLimit` | integer | `120` | Maximum line length |
| `ignoreComments` | boolean | `false` | Ignore comment lines |
| `ignoreImports` | boolean | `false` | Ignore use statements |

## Squiz.ControlStructures Sniffs

### Squiz.ControlStructures.ForLoopDeclaration

Checks for loop declaration formatting.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `requiredSpacesAfterOpen` | integer | `0` | Spaces after opening parenthesis |
| `requiredSpacesBeforeClose` | integer | `0` | Spaces before closing parenthesis |
| `ignoreNewlines` | boolean | `false` | Ignore newlines in declarations |

### Squiz.ControlStructures.ForEachLoopDeclaration

Checks foreach loop declaration formatting.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `requiredSpacesAfterOpen` | integer | `0` | Spaces after opening parenthesis |
| `requiredSpacesBeforeClose` | integer | `0` | Spaces before closing parenthesis |

### Squiz.ControlStructures.SwitchDeclaration

Checks switch statement formatting.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `indent` | integer | `4` | Indentation for case statements |

## Squiz.WhiteSpace Additional Sniffs

### Squiz.WhiteSpace.MemberVarSpacing

Checks spacing between class properties.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacing` | integer | `1` | Blank lines between properties |
| `spacingBeforeFirst` | integer | `1` | Blank lines before first property |

### Squiz.WhiteSpace.ObjectOperatorSpacing

Checks spacing around object operators.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `ignoreNewlines` | boolean | `false` | Ignore newlines in chained calls |

## PSR12.Namespaces Sniffs

### PSR12.Namespaces.CompoundNamespaceDepth

Checks compound namespace depth.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `maxDepth` | integer | `2` | Maximum namespace depth |

## PSR2.ControlStructures Sniffs

### PSR2.ControlStructures.ControlStructureSpacing

Checks control structure spacing.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `requiredSpacesAfterOpen` | integer | `0` | Spaces after opening parenthesis |
| `requiredSpacesBeforeClose` | integer | `0` | Spaces before closing parenthesis |

## Generic.Formatting Additional Sniffs

### Generic.Formatting.MultipleStatementAlignment

Checks alignment of multiple statements.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `maxPadding` | integer | `1000` | Maximum padding spaces |
| `alignAtEnd` | boolean | `true` | Align at end of line |

## Generic.WhiteSpace Additional Sniffs

### Generic.WhiteSpace.SpreadOperatorSpacingAfter

Checks spacing after spread operator.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `spacing` | integer | `0` | Spaces after spread operator |
| `ignoreNewlines` | boolean | `false` | Ignore newlines |

## Generic.ControlStructures Sniffs

### Generic.ControlStructures.InlineControlStructure

Checks for inline control structures.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `error` | boolean | `true` | Report as error (true) or warning (false) |

## Generic.PHP Additional Sniffs

### Generic.PHP.NoSilencedErrors

Checks for silenced errors using @.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `error` | boolean | `true` | Report as error (true) or warning (false) |

## PEAR.ControlStructures Sniffs

### PEAR.ControlStructures.MultiLineCondition

Checks multi-line condition formatting.

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `indent` | integer | `4` | Indentation for conditions |
