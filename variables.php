<?php



// variables aren't just declared in PHP they are directly asssigned
// Simple declaration
$my_string_var = "Hello World !!";
// $my_int_var = 256;
// echo $my_int_var;

// $my_int_var = 150;
// echo $my_int_var;

$my_boolean_var = true;

// Constant String
// const $test= "this is a string in a constant";

// Global Variables 
$GLOBALS['global_variable_name'] = "string in a global variable";
// echo $GLOBALS['global_variable_name'];
// global $global_variable_name = "string in a global variable";


// Variables of Variables

$v='var1';
echo $v; // prints var1
$$v = 'var2'; 
// $var1 = 'var2';
echo $$v; // prints var2
echo $var1; // prints var2

