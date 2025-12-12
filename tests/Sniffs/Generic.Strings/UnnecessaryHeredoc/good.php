<?php declare(strict_types = 1);

// Proper heredoc usage with variables - correct
$name = 'World';
$heredoc = <<<EOT
Hello $name
This is a multiline string with interpolation
EOT;

// Heredoc with complex content
$complex = <<<EOD
Line 1
Line 2 with $variable
Line 3
EOD;

// Nowdoc is also acceptable
$nowdoc = <<<'EOT'
This is a nowdoc
With multiple lines
EOT;
