# Available Sniffs

This document tracks all available sniffs from PHP_CodeSniffer and Slevomat Coding Standard.

- ✅ = Used in ruleset.xml
- ❌ = Not used
- ⚠️ = Partially used (some rules excluded)

---

## Generic (79 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `Generic.Arrays.ArrayIndent` | ❌ | ✅ | Enforces array indentation |
| `Generic.Arrays.DisallowLongArraySyntax` | ✅ | ✅ | Disallows `array()` syntax |
| `Generic.Arrays.DisallowShortArraySyntax` | ❌ | ✅ | Disallows `[]` syntax |
| `Generic.Classes.DuplicateClassName` | ✅ | ✅ | Detects duplicate class names |
| `Generic.Classes.OpeningBraceSameLine` | ❌ | ✅ | Opening brace on same line as class |
| `Generic.CodeAnalysis.AssignmentInCondition` | ❌ | ✅ | Detects assignments in conditions |
| `Generic.CodeAnalysis.EmptyPHPStatement` | ❌ | ✅ | Detects empty PHP statements |
| `Generic.CodeAnalysis.EmptyStatement` | ⚠️ | ✅ | Detects empty statements (DetectedCatch excluded) |
| `Generic.CodeAnalysis.ForLoopShouldBeWhileLoop` | ✅ | ✅ | For loop should be while loop |
| `Generic.CodeAnalysis.ForLoopWithTestFunctionCall` | ❌ | ✅ | Function calls in for loop test |
| `Generic.CodeAnalysis.JumbledIncrementer` | ❌ | ✅ | Detects jumbled incrementers in loops |
| `Generic.CodeAnalysis.RequireExplicitBooleanOperatorPrecedence` | ❌ | ✅ | Requires explicit parentheses for boolean operators |
| `Generic.CodeAnalysis.UnconditionalIfStatement` | ✅ | ✅ | Detects unconditional if statements |
| `Generic.CodeAnalysis.UnnecessaryFinalModifier` | ✅ | ✅ | Detects unnecessary final modifier |
| `Generic.CodeAnalysis.UnusedFunctionParameter` | ❌ | ✅ | Detects unused function parameters |
| `Generic.CodeAnalysis.UselessOverridingMethod` | ❌ | ✅ | Detects useless overriding methods |
| `Generic.Commenting.DocComment` | ⚠️ | ✅ | DocComment format (many exclusions) |
| `Generic.Commenting.Fixme` | ❌ | ✅ | Warns about FIXME comments |
| `Generic.Commenting.Todo` | ❌ | ✅ | Warns about TODO comments |
| `Generic.ControlStructures.DisallowYodaConditions` | ❌ | ✅ | Disallows yoda conditions |
| `Generic.ControlStructures.InlineControlStructure` | ❌ | ✅ | Disallows inline control structures |
| `Generic.Files.ByteOrderMark` | ❌ | ✅ | Detects BOM in files |
| `Generic.Files.EndFileNewline` | ❌ | ✅ | Requires newline at end of file |
| `Generic.Files.EndFileNoNewline` | ❌ | ✅ | Disallows newline at end of file |
| `Generic.Files.ExecutableFile` | ❌ | ✅ | Detects executable files |
| `Generic.Files.InlineHTML` | ✅ | ✅ | Detects inline HTML |
| `Generic.Files.LineEndings` | ❌ | ✅ | Enforces line endings |
| `Generic.Files.LineLength` | ❌ | ✅ | Enforces line length |
| `Generic.Files.LowercasedFilename` | ❌ | ✅ | Requires lowercase filenames |
| `Generic.Files.OneClassPerFile` | ❌ | ✅ | One class per file |
| `Generic.Files.OneInterfacePerFile` | ❌ | ✅ | One interface per file |
| `Generic.Files.OneObjectStructurePerFile` | ❌ | ✅ | One object structure per file |
| `Generic.Files.OneTraitPerFile` | ❌ | ✅ | One trait per file |
| `Generic.Formatting.DisallowMultipleStatements` | ❌ | ✅ | Disallows multiple statements per line |
| `Generic.Formatting.MultipleStatementAlignment` | ❌ | ✅ | Aligns multiple statements |
| `Generic.Formatting.SpaceAfterCast` | ✅ | ✅ | Space after cast |
| `Generic.Formatting.SpaceAfterNot` | ❌ | ✅ | Space after `!` operator |
| `Generic.Formatting.SpaceBeforeCast` | ❌ | ✅ | Space before cast |
| `Generic.Functions.FunctionCallArgumentSpacing` | ❌ | ✅ | Function call argument spacing |
| `Generic.Functions.OpeningFunctionBraceBsdAllman` | ✅ | ✅ | BSD/Allman style braces |
| `Generic.Functions.OpeningFunctionBraceKernighanRitchie` | ❌ | ✅ | K&R style braces |
| `Generic.Metrics.CyclomaticComplexity` | ❌ | ✅ | Measures cyclomatic complexity |
| `Generic.Metrics.NestingLevel` | ❌ | ✅ | Measures nesting level |
| `Generic.NamingConventions.AbstractClassNamePrefix` | ❌ | ✅ | Requires Abstract prefix |
| `Generic.NamingConventions.CamelCapsFunctionName` | ✅ | ✅ | CamelCaps function names |
| `Generic.NamingConventions.ConstructorName` | ✅ | ✅ | Constructor name format |
| `Generic.NamingConventions.InterfaceNameSuffix` | ❌ | ✅ | Requires Interface suffix |
| `Generic.NamingConventions.TraitNameSuffix` | ❌ | ✅ | Requires Trait suffix |
| `Generic.NamingConventions.UpperCaseConstantName` | ✅ | ✅ | Uppercase constant names |
| `Generic.PHP.BacktickOperator` | ❌ | ✅ | Disallows backtick operator |
| `Generic.PHP.CharacterBeforePHPOpeningTag` | ✅ | ✅ | No characters before PHP tag |
| `Generic.PHP.ClosingPHPTag` | ❌ | ✅ | Requires closing PHP tag |
| `Generic.PHP.DeprecatedFunctions` | ✅ | ✅ | Detects deprecated functions |
| `Generic.PHP.DisallowAlternativePHPTags` | ❌ | ✅ | Disallows `<%` and `<script>` |
| `Generic.PHP.DisallowRequestSuperglobal` | ❌ | ✅ | Disallows `$_REQUEST` |
| `Generic.PHP.DisallowShortOpenTag` | ✅ | ✅ | Disallows short open tag |
| `Generic.PHP.DiscourageGoto` | ❌ | ✅ | Discourages goto |
| `Generic.PHP.ForbiddenFunctions` | ✅ | ✅ | Forbids specific functions |
| `Generic.PHP.LowerCaseConstant` | ❌ | ✅ | Lowercase true/false/null |
| `Generic.PHP.LowerCaseKeyword` | ❌ | ✅ | Lowercase keywords |
| `Generic.PHP.LowerCaseType` | ❌ | ✅ | Lowercase type hints |
| `Generic.PHP.NoSilencedErrors` | ❌ | ✅ | Disallows `@` error suppression |
| `Generic.PHP.RequireStrictTypes` | ❌ | ✅ | Requires strict_types |
| `Generic.PHP.SAPIUsage` | ❌ | ✅ | Detects SAPI usage |
| `Generic.PHP.Syntax` | ❌ | ✅ | Checks PHP syntax |
| `Generic.PHP.UpperCaseConstant` | ❌ | ✅ | Uppercase TRUE/FALSE/NULL |
| `Generic.Strings.UnnecessaryHeredoc` | ❌ | ✅ | Detects unnecessary heredoc |
| `Generic.Strings.UnnecessaryStringConcat` | ✅ | ✅ | Detects unnecessary string concatenation |
| `Generic.VersionControl.GitMergeConflict` | ❌ | ✅ | Detects git merge conflicts |
| `Generic.VersionControl.SubversionProperties` | ❌ | ✅ | SVN properties |
| `Generic.WhiteSpace.ArbitraryParenthesesSpacing` | ❌ | ✅ | Spacing in parentheses |
| `Generic.WhiteSpace.DisallowSpaceIndent` | ✅ | ✅ | Disallows space indentation |
| `Generic.WhiteSpace.DisallowTabIndent` | ❌ | ✅ | Disallows tab indentation |
| `Generic.WhiteSpace.GotoTargetSpacing` | ❌ | ❌ | Goto target spacing |
| `Generic.WhiteSpace.HereNowdocIdentifierSpacing` | ❌ | ❌ | Heredoc identifier spacing |
| `Generic.WhiteSpace.IncrementDecrementSpacing` | ❌ | ❌ | Increment/decrement spacing |
| `Generic.WhiteSpace.LanguageConstructSpacing` | ✅ | ✅ | Language construct spacing |
| `Generic.WhiteSpace.ScopeIndent` | ✅ | ✅ | Scope indentation |
| `Generic.WhiteSpace.SpreadOperatorSpacingAfter` | ❌ | ✅ | Spacing after spread operator |

---

## PEAR (18 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `PEAR.Classes.ClassDeclaration` | ✅ | ✅ | Class declaration format |
| `PEAR.Commenting.ClassComment` | ❌ | ✅ | Class docblock format |
| `PEAR.Commenting.FileComment` | ❌ | ✅ | File docblock format |
| `PEAR.Commenting.FunctionComment` | ❌ | ✅ | Function docblock format |
| `PEAR.Commenting.InlineComment` | ✅ | ✅ | Inline comment format |
| `PEAR.ControlStructures.ControlSignature` | ❌ | ✅ | Control structure format |
| `PEAR.ControlStructures.MultiLineCondition` | ❌ | ✅ | Multi-line condition format |
| `PEAR.Files.IncludingFile` | ❌ | ✅ | Include/require format |
| `PEAR.Formatting.MultiLineAssignment` | ✅ | ✅ | Multi-line assignment format |
| `PEAR.Functions.FunctionCallSignature` | ❌ | ✅ | Function call format |
| `PEAR.Functions.FunctionDeclaration` | ❌ | ✅ | Function declaration format |
| `PEAR.Functions.ValidDefaultValue` | ❌ | ✅ | Valid default values |
| `PEAR.NamingConventions.ValidClassName` | ❌ | ✅ | Valid class name |
| `PEAR.NamingConventions.ValidFunctionName` | ❌ | ✅ | Valid function name |
| `PEAR.NamingConventions.ValidVariableName` | ❌ | ✅ | Valid variable name |
| `PEAR.WhiteSpace.ObjectOperatorIndent` | ✅ | ✅ | Object operator indentation |
| `PEAR.WhiteSpace.ScopeClosingBrace` | ❌ | ✅ | Scope closing brace |
| `PEAR.WhiteSpace.ScopeIndent` | ❌ | ✅ | Scope indentation |

---

## PSR1 (3 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `PSR1.Classes.ClassDeclaration` | ❌ | ✅ | One class per file, etc |
| `PSR1.Files.SideEffects` | ❌ | ✅ | No side effects in class files |
| `PSR1.Methods.CamelCapsMethodName` | ❌ | ✅ | CamelCase method names |

---

## PSR2 (9 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `PSR2.Classes.ClassDeclaration` | ❌ | ❌ | Class declaration format |
| `PSR2.Classes.PropertyDeclaration` | ✅ | ✅ | Property declaration format (via PSR2) |
| `PSR2.ControlStructures.ElseIfDeclaration` | ✅ | ✅ | elseif vs else if (via PSR2) |
| `PSR2.ControlStructures.SwitchDeclaration` | ⚠️ | ✅ | Switch format (some exclusions via PSR2) |
| `PSR2.Files.ClosingTag` | ✅ | ✅ | No closing PHP tag (via PSR2) |
| `PSR2.Files.EndFileNewline` | ✅ | ✅ | Newline at end of file (via PSR2) |
| `PSR2.Methods.FunctionCallSignature` | ✅ | ✅ | Function call format (via PSR2) |
| `PSR2.Methods.FunctionClosingBrace` | ✅ | ✅ | Function closing brace (via PSR2) |
| `PSR2.Methods.MethodDeclaration` | ✅ | ✅ | Method declaration format (via PSR2) |

---

## PSR12 (17 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `PSR12.Classes.AnonClassDeclaration` | ❌ | ✅ | Anonymous class format |
| `PSR12.Classes.ClassInstantiation` | ❌ | ✅ | Class instantiation format |
| `PSR12.Classes.ClosingBrace` | ❌ | ✅ | Closing brace format |
| `PSR12.Classes.OpeningBraceSpace` | ❌ | ✅ | Opening brace spacing |
| `PSR12.ControlStructures.BooleanOperatorPlacement` | ❌ | ✅ | Boolean operator placement |
| `PSR12.ControlStructures.ControlStructureSpacing` | ❌ | ✅ | Control structure spacing |
| `PSR12.Files.DeclareStatement` | ❌ | ✅ | Declare statement format |
| `PSR12.Files.FileHeader` | ❌ | ✅ | File header format |
| `PSR12.Files.ImportStatement` | ❌ | ✅ | Import statement format |
| `PSR12.Files.OpenTag` | ❌ | ✅ | Opening tag format |
| `PSR12.Functions.NullableTypeDeclaration` | ❌ | ✅ | Nullable type format |
| `PSR12.Functions.ReturnTypeDeclaration` | ❌ | ✅ | Return type format |
| `PSR12.Keywords.ShortFormTypeKeywords` | ❌ | ✅ | Short form type keywords |
| `PSR12.Namespaces.CompoundNamespaceDepth` | ❌ | ✅ | Compound namespace depth |
| `PSR12.Operators.OperatorSpacing` | ❌ | ✅ | Operator spacing |
| `PSR12.Properties.ConstantVisibility` | ❌ | ✅ | Constant visibility |
| `PSR12.Traits.UseDeclaration` | ❌ | ✅ | Trait use format |

---

## Squiz (73 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `Squiz.Arrays.ArrayBracketSpacing` | ✅ | ✅ | Array bracket spacing |
| `Squiz.Arrays.ArrayDeclaration` | ⚠️ | ✅ | Array declaration (many exclusions) |
| `Squiz.Classes.ClassDeclaration` | ❌ | ✅ | Class declaration format |
| `Squiz.Classes.ClassFileName` | ✅ | ✅ | Class file name |
| `Squiz.Classes.LowercaseClassKeywords` | ❌ | ✅ | Lowercase class/interface/trait |
| `Squiz.Classes.SelfMemberReference` | ✅ | ✅ | Self member reference |
| `Squiz.Classes.ValidClassName` | ❌ | ✅ | Valid class name format |
| `Squiz.Commenting.BlockComment` | ❌ | ✅ | Block comment format |
| `Squiz.Commenting.ClassComment` | ❌ | ✅ | Class docblock format |
| `Squiz.Commenting.ClosingDeclarationComment` | ❌ | ✅ | Closing brace comments |
| `Squiz.Commenting.DocCommentAlignment` | ⚠️ | ✅ | DocComment alignment (SpaceAfterStar excluded) |
| `Squiz.Commenting.EmptyCatchComment` | ✅ | ✅ | Empty catch comment |
| `Squiz.Commenting.FileComment` | ❌ | ✅ | File docblock format |
| `Squiz.Commenting.FunctionComment` | ⚠️ | ✅ | Function comment (many exclusions) |
| `Squiz.Commenting.FunctionCommentThrowTag` | ❌ | ✅ | @throws tag format |
| `Squiz.Commenting.InlineComment` | ❌ | ✅ | Inline comment format |
| `Squiz.Commenting.LongConditionClosingComment` | ❌ | ✅ | Long condition closing comments |
| `Squiz.Commenting.PostStatementComment` | ❌ | ✅ | Post-statement comments |
| `Squiz.Commenting.VariableComment` | ⚠️ | ✅ | Variable comment (some exclusions) |
| `Squiz.ControlStructures.ControlSignature` | ❌ | ✅ | Control structure format |
| `Squiz.ControlStructures.ElseIfDeclaration` | ❌ | ✅ | elseif format |
| `Squiz.ControlStructures.ForEachLoopDeclaration` | ❌ | ✅ | foreach format |
| `Squiz.ControlStructures.ForLoopDeclaration` | ❌ | ✅ | for loop format |
| `Squiz.ControlStructures.InlineIfDeclaration` | ❌ | ✅ | Inline if format |
| `Squiz.ControlStructures.LowercaseDeclaration` | ❌ | ✅ | Lowercase control structures |
| `Squiz.ControlStructures.SwitchDeclaration` | ❌ | ✅ | Switch format |
| `Squiz.Files.FileExtension` | ❌ | ✅ | File extension checks |
| `Squiz.Formatting.OperatorBracket` | ❌ | ✅ | Brackets around operators |
| `Squiz.Functions.FunctionDeclaration` | ❌ | ✅ | Function declaration format |
| `Squiz.Functions.FunctionDeclarationArgumentSpacing` | ❌ | ✅ | Argument spacing |
| `Squiz.Functions.FunctionDuplicateArgument` | ❌ | ✅ | Duplicate argument names |
| `Squiz.Functions.GlobalFunction` | ✅ | ✅ | Global function detection |
| `Squiz.Functions.LowercaseFunctionKeywords` | ❌ | ✅ | Lowercase function keywords |
| `Squiz.Functions.MultiLineFunctionDeclaration` | ❌ | ✅ | Multi-line function format |
| `Squiz.NamingConventions.ValidFunctionName` | ❌ | ✅ | Valid function name format |
| `Squiz.NamingConventions.ValidVariableName` | ❌ | ✅ | Valid variable name format |
| `Squiz.Objects.ObjectInstantiation` | ❌ | ✅ | Object instantiation format |
| `Squiz.Operators.ComparisonOperatorUsage` | ❌ | ✅ | Comparison operator usage |
| `Squiz.Operators.IncrementDecrementUsage` | ⚠️ | ✅ | Increment/decrement usage (NoBrackets excluded) |
| `Squiz.Operators.ValidLogicalOperators` | ✅ | ✅ | Valid logical operators |
| `Squiz.PHP.CommentedOutCode` | ❌ | ✅ | Detects commented out code |
| `Squiz.PHP.DisallowBooleanStatement` | ❌ | ✅ | Disallows boolean statements |
| `Squiz.PHP.DisallowComparisonAssignment` | ❌ | ✅ | Disallows comparison assignment |
| `Squiz.PHP.DisallowInlineIf` | ❌ | ✅ | Disallows inline if |
| `Squiz.PHP.DisallowMultipleAssignments` | ❌ | ✅ | Disallows multiple assignments |
| `Squiz.PHP.DisallowSizeFunctionsInLoops` | ❌ | ✅ | Disallows count() in loops |
| `Squiz.PHP.DiscouragedFunctions` | ❌ | ✅ | Discouraged functions |
| `Squiz.PHP.EmbeddedPhp` | ❌ | ✅ | Embedded PHP format |
| `Squiz.PHP.Eval` | ❌ | ✅ | Disallows eval() |
| `Squiz.PHP.GlobalKeyword` | ✅ | ✅ | Global keyword usage |
| `Squiz.PHP.Heredoc` | ⚠️ | ✅ | Heredoc usage (NotAllowed excluded) |
| `Squiz.PHP.InnerFunctions` | ✅ | ✅ | Inner functions |
| `Squiz.PHP.LowercasePHPFunctions` | ✅ | ✅ | Lowercase PHP functions |
| `Squiz.PHP.NonExecutableCode` | ✅ | ✅ | Non-executable code |
| `Squiz.Scope.MemberVarScope` | ❌ | ✅ | Member var visibility |
| `Squiz.Scope.MethodScope` | ❌ | ✅ | Method visibility |
| `Squiz.Scope.StaticThisUsage` | ✅ | ✅ | Static this usage |
| `Squiz.Strings.ConcatenationSpacing` | ✅ | ✅ | Concatenation spacing |
| `Squiz.Strings.DoubleQuoteUsage` | ✅ | ✅ | Double quote usage |
| `Squiz.Strings.EchoedStrings` | ✅ | ✅ | Echoed strings |
| `Squiz.WhiteSpace.CastSpacing` | ✅ | ✅ | Cast spacing |
| `Squiz.WhiteSpace.ControlStructureSpacing` | ❌ | ✅ | Control structure spacing |
| `Squiz.WhiteSpace.FunctionClosingBraceSpace` | ❌ | ✅ | Function closing brace spacing |
| `Squiz.WhiteSpace.FunctionOpeningBraceSpace` | ✅ | ✅ | Function opening brace spacing |
| `Squiz.WhiteSpace.FunctionSpacing` | ⚠️ | ✅ | Function spacing (After excluded) |
| `Squiz.WhiteSpace.LogicalOperatorSpacing` | ✅ | ✅ | Logical operator spacing |
| `Squiz.WhiteSpace.MemberVarSpacing` | ❌ | ✅ | Member variable spacing |
| `Squiz.WhiteSpace.ObjectOperatorSpacing` | ⚠️ | ✅ | Object operator spacing (Before excluded) |
| `Squiz.WhiteSpace.OperatorSpacing` | ✅ | ✅ | Operator spacing |
| `Squiz.WhiteSpace.ScopeClosingBrace` | ❌ | ✅ | Scope closing brace format |
| `Squiz.WhiteSpace.ScopeKeywordSpacing` | ❌ | ✅ | Scope keyword spacing |
| `Squiz.WhiteSpace.SemicolonSpacing` | ✅ | ✅ | Semicolon spacing |
| `Squiz.WhiteSpace.SuperfluousWhitespace` | ✅ | ✅ | Superfluous whitespace |

---

## Zend (2 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `Zend.Files.ClosingTag` | ❌ | ✅ | No closing PHP tag |
| `Zend.NamingConventions.ValidVariableName` | ❌ | ✅ | Valid variable name |

---

## SlevomatCodingStandard (168 sniffs)

### Arrays (7 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Arrays.AlphabeticallySortedByKeys` | ❌ | ✅ | Alphabetically sorted array keys |
| `SlevomatCodingStandard.Arrays.ArrayAccess` | ❌ | ✅ | Array access format |
| `SlevomatCodingStandard.Arrays.DisallowImplicitArrayCreation` | ✅ | ✅ | Disallows implicit array creation |
| `SlevomatCodingStandard.Arrays.DisallowPartiallyKeyed` | ❌ | ✅ | Disallows partially keyed arrays |
| `SlevomatCodingStandard.Arrays.MultiLineArrayEndBracketPlacement` | ✅ | ✅ | Multi-line array end bracket |
| `SlevomatCodingStandard.Arrays.SingleLineArrayWhitespace` | ✅ | ✅ | Single line array whitespace |
| `SlevomatCodingStandard.Arrays.TrailingArrayComma` | ✅ | ✅ | Trailing array comma |

### Attributes (5 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Attributes.AttributeAndTargetSpacing` | ❌ | ✅ | Attribute and target spacing |
| `SlevomatCodingStandard.Attributes.AttributesOrder` | ❌ | ✅ | Attributes order |
| `SlevomatCodingStandard.Attributes.DisallowAttributesJoining` | ❌ | ✅ | Disallows joined attributes |
| `SlevomatCodingStandard.Attributes.DisallowMultipleAttributesPerLine` | ❌ | ✅ | One attribute per line |
| `SlevomatCodingStandard.Attributes.RequireAttributeAfterDocComment` | ❌ | ✅ | Attribute after docblock |

### Classes (28 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Classes.BackedEnumTypeSpacing` | ❌ | ✅ | Backed enum type spacing |
| `SlevomatCodingStandard.Classes.ClassConstantVisibility` | ✅ | ✅ | Class constant visibility |
| `SlevomatCodingStandard.Classes.ClassLength` | ❌ | ✅ | Maximum class length |
| `SlevomatCodingStandard.Classes.ClassMemberSpacing` | ✅ | ✅ | Class member spacing |
| `SlevomatCodingStandard.Classes.ClassStructure` | ✅ | ✅ | Class structure order |
| `SlevomatCodingStandard.Classes.ConstantSpacing` | ✅ | ✅ | Constant spacing |
| `SlevomatCodingStandard.Classes.DisallowConstructorPropertyPromotion` | ❌ | ✅ | Disallows constructor property promotion |
| `SlevomatCodingStandard.Classes.DisallowLateStaticBindingForConstants` | ✅ | ✅ | Disallows late static binding for constants |
| `SlevomatCodingStandard.Classes.DisallowMultiConstantDefinition` | ✅ | ✅ | Disallows multi-constant definition |
| `SlevomatCodingStandard.Classes.DisallowMultiPropertyDefinition` | ✅ | ✅ | Disallows multi-property definition |
| `SlevomatCodingStandard.Classes.DisallowStringExpressionPropertyFetch` | ❌ | ✅ | Disallows `$obj->{'prop'}` |
| `SlevomatCodingStandard.Classes.EmptyLinesAroundClassBraces` | ✅ | ✅ | Empty lines around class braces |
| `SlevomatCodingStandard.Classes.EnumCaseSpacing` | ❌ | ✅ | Enum case spacing |
| `SlevomatCodingStandard.Classes.ForbiddenPublicProperty` | ❌ | ✅ | Forbids public properties |
| `SlevomatCodingStandard.Classes.MethodSpacing` | ✅ | ✅ | Method spacing |
| `SlevomatCodingStandard.Classes.ModernClassNameReference` | ✅ | ✅ | Modern class name reference |
| `SlevomatCodingStandard.Classes.ParentCallSpacing` | ✅ | ✅ | Parent call spacing |
| `SlevomatCodingStandard.Classes.PropertyDeclaration` | ❌ | ✅ | Property declaration format |
| `SlevomatCodingStandard.Classes.PropertySpacing` | ✅ | ✅ | Property spacing |
| `SlevomatCodingStandard.Classes.RequireAbstractOrFinal` | ❌ | ✅ | Requires abstract or final |
| `SlevomatCodingStandard.Classes.RequireConstructorPropertyPromotion` | ❌ | ✅ | Requires constructor property promotion |
| `SlevomatCodingStandard.Classes.RequireMultiLineMethodSignature` | ❌ | ✅ | Multi-line method signatures |
| `SlevomatCodingStandard.Classes.RequireSelfReference` | ❌ | ✅ | Requires self:: |
| `SlevomatCodingStandard.Classes.RequireSingleLineMethodSignature` | ❌ | ✅ | Single-line method signatures |
| `SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming` | ⚠️ | ✅ | Superfluous Abstract prefix (excluded) |
| `SlevomatCodingStandard.Classes.SuperfluousErrorNaming` | ✅ | ✅ | Superfluous Error suffix |
| `SlevomatCodingStandard.Classes.SuperfluousExceptionNaming` | ⚠️ | ✅ | Superfluous Exception suffix (excluded) |
| `SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming` | ✅ | ✅ | Superfluous Interface suffix |
| `SlevomatCodingStandard.Classes.SuperfluousTraitNaming` | ✅ | ✅ | Superfluous Trait suffix |
| `SlevomatCodingStandard.Classes.TraitUseDeclaration` | ✅ | ✅ | Trait use declaration |
| `SlevomatCodingStandard.Classes.TraitUseSpacing` | ✅ | ✅ | Trait use spacing |
| `SlevomatCodingStandard.Classes.UselessLateStaticBinding` | ✅ | ✅ | Useless late static binding |

### Commenting (14 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Commenting.AnnotationName` | ❌ | ✅ | Annotation name format |
| `SlevomatCodingStandard.Commenting.DeprecatedAnnotationDeclaration` | ✅ | ✅ | Deprecated annotation declaration |
| `SlevomatCodingStandard.Commenting.DisallowCommentAfterCode` | ❌ | ✅ | Disallows inline comments |
| `SlevomatCodingStandard.Commenting.DisallowOneLinePropertyDocComment` | ⚠️ | ✅ | Disallows one-line property docblock (excluded) |
| `SlevomatCodingStandard.Commenting.DocCommentSpacing` | ✅ | ✅ | DocComment spacing |
| `SlevomatCodingStandard.Commenting.EmptyComment` | ✅ | ✅ | Empty comment |
| `SlevomatCodingStandard.Commenting.ForbiddenAnnotations` | ✅ | ✅ | Forbidden annotations |
| `SlevomatCodingStandard.Commenting.ForbiddenComments` | ✅ | ✅ | Forbidden comments |
| `SlevomatCodingStandard.Commenting.InlineDocCommentDeclaration` | ✅ | ✅ | Inline docblock declaration |
| `SlevomatCodingStandard.Commenting.RequireOneDocComment` | ❌ | ✅ | Requires one docblock |
| `SlevomatCodingStandard.Commenting.RequireOneLineDocComment` | ❌ | ✅ | Requires one-line docblock |
| `SlevomatCodingStandard.Commenting.RequireOneLinePropertyDocComment` | ✅ | ✅ | Requires one-line property docblock |
| `SlevomatCodingStandard.Commenting.UselessFunctionDocComment` | ✅ | ✅ | Useless function docblock |
| `SlevomatCodingStandard.Commenting.UselessInheritDocComment` | ⚠️ | ✅ | Useless inheritdoc (excluded) |

### Complexity (1 sniff)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Complexity.Cognitive` | ❌ | ✅ | Cognitive complexity |

### ControlStructures (23 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.ControlStructures.AssignmentInCondition` | ❌ | ✅ | Detects assignment in condition |
| `SlevomatCodingStandard.ControlStructures.BlockControlStructureSpacing` | ⚠️ | ✅ | Block control structure spacing (some exclusions) |
| `SlevomatCodingStandard.ControlStructures.DisallowContinueWithoutIntegerOperandInSwitch` | ✅ | ✅ | Disallows continue without integer in switch |
| `SlevomatCodingStandard.ControlStructures.DisallowEmpty` | ❌ | ✅ | Disallows empty() |
| `SlevomatCodingStandard.ControlStructures.DisallowNullSafeObjectOperator` | ❌ | ✅ | Disallows `?->` |
| `SlevomatCodingStandard.ControlStructures.DisallowShortTernaryOperator` | ❌ | ✅ | Disallows `?:` |
| `SlevomatCodingStandard.ControlStructures.DisallowTrailingMultiLineTernaryOperator` | ❌ | ✅ | Ternary format |
| `SlevomatCodingStandard.ControlStructures.DisallowYodaComparison` | ✅ | ✅ | Disallows yoda comparisons |
| `SlevomatCodingStandard.ControlStructures.EarlyExit` | ❌ | ✅ | Requires early exit |
| `SlevomatCodingStandard.ControlStructures.JumpStatementsSpacing` | ✅ | ✅ | Jump statements spacing |
| `SlevomatCodingStandard.ControlStructures.LanguageConstructWithParentheses` | ✅ | ✅ | Language construct with parentheses |
| `SlevomatCodingStandard.ControlStructures.NewWithoutParentheses` | ⚠️ | ✅ | New without parentheses (excluded) |
| `SlevomatCodingStandard.ControlStructures.NewWithParentheses` | ✅ | ✅ | New with parentheses |
| `SlevomatCodingStandard.ControlStructures.RequireMultiLineCondition` | ❌ | ✅ | Multi-line conditions |
| `SlevomatCodingStandard.ControlStructures.RequireMultiLineTernaryOperator` | ⚠️ | ✅ | Multi-line ternary (excluded) |
| `SlevomatCodingStandard.ControlStructures.RequireNullCoalesceEqualOperator` | ✅ | ✅ | Requires `??=` |
| `SlevomatCodingStandard.ControlStructures.RequireNullCoalesceOperator` | ✅ | ✅ | Requires `??` |
| `SlevomatCodingStandard.ControlStructures.RequireNullSafeObjectOperator` | ❌ | ✅ | Requires `?->` |
| `SlevomatCodingStandard.ControlStructures.RequireShortTernaryOperator` | ✅ | ✅ | Requires `?:` |
| `SlevomatCodingStandard.ControlStructures.RequireSingleLineCondition` | ✅ | ✅ | Single-line conditions |
| `SlevomatCodingStandard.ControlStructures.RequireTernaryOperator` | ✅ | ✅ | Requires ternary |
| `SlevomatCodingStandard.ControlStructures.RequireYodaComparison` | ❌ | ✅ | Requires yoda comparisons |
| `SlevomatCodingStandard.ControlStructures.UselessIfConditionWithReturn` | ✅ | ✅ | Useless if with return |
| `SlevomatCodingStandard.ControlStructures.UselessTernaryOperator` | ✅ | ✅ | Useless ternary |

### Exceptions (4 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Exceptions.DeadCatch` | ✅ | ✅ | Dead catch |
| `SlevomatCodingStandard.Exceptions.DisallowNonCapturingCatch` | ❌ | ✅ | Disallows non-capturing catch |
| `SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly` | ✅ | ✅ | Reference Throwable only |
| `SlevomatCodingStandard.Exceptions.RequireNonCapturingCatch` | ❌ | ✅ | Requires non-capturing catch |

### Files (3 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Files.FileLength` | ❌ | ✅ | Maximum file length |
| `SlevomatCodingStandard.Files.LineLength` | ❌ | ✅ | Maximum line length |
| `SlevomatCodingStandard.Files.TypeNameMatchesFileName` | ❌ | ✅ | Type name matches file name |

### Functions (18 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Functions.ArrowFunctionDeclaration` | ✅ | ✅ | Arrow function declaration |
| `SlevomatCodingStandard.Functions.DisallowArrowFunction` | ❌ | ✅ | Disallows arrow functions |
| `SlevomatCodingStandard.Functions.DisallowEmptyFunction` | ✅ | ✅ | Disallows empty functions |
| `SlevomatCodingStandard.Functions.DisallowNamedArguments` | ❌ | ✅ | Disallows named arguments |
| `SlevomatCodingStandard.Functions.DisallowTrailingCommaInCall` | ❌ | ✅ | Disallows trailing comma in call |
| `SlevomatCodingStandard.Functions.DisallowTrailingCommaInClosureUse` | ❌ | ✅ | Disallows trailing comma in use |
| `SlevomatCodingStandard.Functions.DisallowTrailingCommaInDeclaration` | ❌ | ✅ | Disallows trailing comma |
| `SlevomatCodingStandard.Functions.FunctionLength` | ❌ | ✅ | Maximum function length |
| `SlevomatCodingStandard.Functions.NamedArgumentSpacing` | ❌ | ✅ | Named argument spacing |
| `SlevomatCodingStandard.Functions.RequireArrowFunction` | ✅ | ✅ | Requires arrow functions |
| `SlevomatCodingStandard.Functions.RequireMultiLineCall` | ❌ | ✅ | Multi-line function calls |
| `SlevomatCodingStandard.Functions.RequireSingleLineCall` | ❌ | ✅ | Single-line function calls |
| `SlevomatCodingStandard.Functions.RequireTrailingCommaInCall` | ❌ | ✅ | Trailing comma in calls |
| `SlevomatCodingStandard.Functions.RequireTrailingCommaInClosureUse` | ❌ | ✅ | Trailing comma in use |
| `SlevomatCodingStandard.Functions.RequireTrailingCommaInDeclaration` | ❌ | ✅ | Trailing comma in declaration |
| `SlevomatCodingStandard.Functions.StaticClosure` | ⚠️ | ✅ | Static closure (excluded) |
| `SlevomatCodingStandard.Functions.StrictCall` | ✅ | ✅ | Strict call |
| `SlevomatCodingStandard.Functions.UnusedInheritedVariablePassedToClosure` | ✅ | ✅ | Unused inherited variable |
| `SlevomatCodingStandard.Functions.UnusedParameter` | ❌ | ✅ | Detects unused parameters |
| `SlevomatCodingStandard.Functions.UselessParameterDefaultValue` | ✅ | ✅ | Useless parameter default |

### Namespaces (17 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Namespaces.AlphabeticallySortedUses` | ✅ | ✅ | Alphabetically sorted uses |
| `SlevomatCodingStandard.Namespaces.DisallowGroupUse` | ✅ | ✅ | Disallows group use |
| `SlevomatCodingStandard.Namespaces.FullyQualifiedClassNameInAnnotation` | ⚠️ | ✅ | FQ class in annotation (excluded) |
| `SlevomatCodingStandard.Namespaces.FullyQualifiedExceptions` | ⚠️ | ✅ | FQ exceptions (excluded) |
| `SlevomatCodingStandard.Namespaces.FullyQualifiedGlobalConstants` | ❌ | ✅ | FQ global constants |
| `SlevomatCodingStandard.Namespaces.FullyQualifiedGlobalFunctions` | ❌ | ✅ | FQ global functions |
| `SlevomatCodingStandard.Namespaces.MultipleUsesPerLine` | ✅ | ✅ | Multiple uses per line |
| `SlevomatCodingStandard.Namespaces.NamespaceDeclaration` | ✅ | ✅ | Namespace declaration |
| `SlevomatCodingStandard.Namespaces.NamespaceSpacing` | ✅ | ✅ | Namespace spacing |
| `SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly` | ⚠️ | ✅ | Reference used names only (one exclusion) |
| `SlevomatCodingStandard.Namespaces.RequireOneNamespaceInFile` | ✅ | ✅ | One namespace per file |
| `SlevomatCodingStandard.Namespaces.UnusedUses` | ✅ | ✅ | Unused uses |
| `SlevomatCodingStandard.Namespaces.UseDoesNotStartWithBackslash` | ✅ | ✅ | Use without leading backslash |
| `SlevomatCodingStandard.Namespaces.UseFromSameNamespace` | ✅ | ✅ | Use from same namespace |
| `SlevomatCodingStandard.Namespaces.UseOnlyWhitelistedNamespaces` | ❌ | ✅ | Whitelist namespaces |
| `SlevomatCodingStandard.Namespaces.UselessAlias` | ✅ | ✅ | Useless alias |
| `SlevomatCodingStandard.Namespaces.UseSpacing` | ✅ | ✅ | Use spacing |

### Numbers (2 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Numbers.DisallowNumericLiteralSeparator` | ✅ | ✅ | Disallows `1_000_000` |
| `SlevomatCodingStandard.Numbers.RequireNumericLiteralSeparator` | ❌ | ✅ | Requires `1_000_000` |

### Operators (6 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Operators.DisallowEqualOperators` | ✅ | ✅ | Disallows `==` and `!=` |
| `SlevomatCodingStandard.Operators.DisallowIncrementAndDecrementOperators` | ❌ | ✅ | Disallows `++`/`--` |
| `SlevomatCodingStandard.Operators.NegationOperatorSpacing` | ✅ | ✅ | Negation operator spacing |
| `SlevomatCodingStandard.Operators.RequireCombinedAssignmentOperator` | ✅ | ✅ | Requires `+=`, `-=`, etc |
| `SlevomatCodingStandard.Operators.RequireOnlyStandaloneIncrementAndDecrementOperators` | ❌ | ✅ | Standalone `++`/`--` |
| `SlevomatCodingStandard.Operators.SpreadOperatorSpacing` | ✅ | ✅ | Spread operator spacing |

### PHP (11 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.PHP.DisallowDirectMagicInvokeCall` | ✅ | ✅ | Disallows `$obj->__invoke()` |
| `SlevomatCodingStandard.PHP.DisallowReference` | ✅ | ✅ | Disallows references |
| `SlevomatCodingStandard.PHP.ForbiddenClasses` | ❌ | ✅ | Forbid specific classes |
| `SlevomatCodingStandard.PHP.OptimizedFunctionsWithoutUnpacking` | ✅ | ✅ | Optimized functions |
| `SlevomatCodingStandard.PHP.ReferenceSpacing` | ✅ | ✅ | Reference spacing |
| `SlevomatCodingStandard.PHP.RequireExplicitAssertion` | ❌ | ✅ | Requires explicit assertions |
| `SlevomatCodingStandard.PHP.RequireNowdoc` | ✅ | ✅ | Requires nowdoc |
| `SlevomatCodingStandard.PHP.ShortList` | ✅ | ✅ | Short list syntax |
| `SlevomatCodingStandard.PHP.TypeCast` | ✅ | ✅ | Type cast format |
| `SlevomatCodingStandard.PHP.UselessParentheses` | ❌ | ✅ | Detects useless parentheses |
| `SlevomatCodingStandard.PHP.UselessSemicolon` | ✅ | ✅ | Useless semicolon |

### Strings (1 sniff)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Strings.DisallowVariableParsing` | ❌ | ✅ | Disallows `"$var"` |

### TypeHints (16 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.TypeHints.ClassConstantTypeHint` | ❌ | ✅ | Class constant type hints (PHP 8.3+) |
| `SlevomatCodingStandard.TypeHints.DeclareStrictTypes` | ✅ | ✅ | Declare strict types |
| `SlevomatCodingStandard.TypeHints.DisallowArrayTypeHintSyntax` | ❌ | ✅ | Disallows `array<>` |
| `SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint` | ❌ | ✅ | Disallows mixed type hint |
| `SlevomatCodingStandard.TypeHints.DNFTypeHintFormat` | ❌ | ❌ | DNF type hint format |
| `SlevomatCodingStandard.TypeHints.LongTypeHints` | ✅ | ✅ | Long type hints |
| `SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue` | ✅ | ✅ | Nullable type for null default |
| `SlevomatCodingStandard.TypeHints.NullTypeHintOnLastPosition` | ✅ | ✅ | Null type hint on last position |
| `SlevomatCodingStandard.TypeHints.ParameterTypeHint` | ✅ | ✅ | Parameter type hint |
| `SlevomatCodingStandard.TypeHints.ParameterTypeHintSpacing` | ✅ | ✅ | Parameter type hint spacing |
| `SlevomatCodingStandard.TypeHints.PropertyTypeHint` | ✅ | ✅ | Property type hint |
| `SlevomatCodingStandard.TypeHints.ReturnTypeHint` | ✅ | ✅ | Return type hint |
| `SlevomatCodingStandard.TypeHints.ReturnTypeHintSpacing` | ✅ | ✅ | Return type hint spacing |
| `SlevomatCodingStandard.TypeHints.UnionTypeHintFormat` | ❌ | ✅ | Union type format (deprecated) |
| `SlevomatCodingStandard.TypeHints.UselessConstantTypeHint` | ✅ | ✅ | Useless constant type hint |

### Variables (5 sniffs)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Variables.DisallowSuperGlobalVariable` | ✅ | ✅ | Disallows superglobals |
| `SlevomatCodingStandard.Variables.DisallowVariableVariable` | ❌ | ✅ | Disallows `$$var` |
| `SlevomatCodingStandard.Variables.DuplicateAssignmentToVariable` | ✅ | ✅ | Duplicate assignment |
| `SlevomatCodingStandard.Variables.UnusedVariable` | ✅ | ✅ | Unused variable |
| `SlevomatCodingStandard.Variables.UselessVariable` | ✅ | ✅ | Useless variable |

### Whitespaces (1 sniff)

| Sniff | Status | Tests | Description |
|-------|--------|-------|-------------|
| `SlevomatCodingStandard.Whitespaces.DuplicateSpaces` | ✅ | ✅ | Duplicate spaces |
