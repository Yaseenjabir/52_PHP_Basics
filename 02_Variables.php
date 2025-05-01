<?php

// Variables in PHP
// Variables are used to store data that can be used later in the script.
// In PHP, variables are represented by a dollar sign followed by the name of the variable.
// Variable names can contain letters, numbers, and underscores, but cannot start with a number.
// Variable names are case-sensitive, meaning that $var and $Var are considered different variables.
// The following are some examples of valid variable names:
$var1 = "Hello, World!";
$var2 = 42;
$var3 = 3.14;
$var4 = true;
$var5 = null;
$sameVal1= $sameVal2 = 30;

echo $sameVal1, $sameVal2;

echo("var1 : $var1\n");
echo("var2 : $var2\n");
// The following are some examples of invalid variable names:
// $1var = "Hello, World!"; // Invalid: cannot start with a number
// $var-1 = "Hello, World!"; // Invalid: cannot contain special characters
// $var name = "Hello, World!"; // Invalid: cannot contain spaces
// The following are some examples of valid variable names:
$var_name = "Hello, World!";
$varName = "Hello, World!";
$varNAME = "Hello, World!";


?>