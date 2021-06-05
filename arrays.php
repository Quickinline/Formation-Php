<?php

// empty array
$tableau = [];

// array of integers
$nombres = [12, 15, 16, 5, 26];

// Array of Strings
$chaines = ["Hello", "World"];

// append item to array
$chaines[] = "my";
$chaines[] = "Friend";

// $chaines = ["Hello", "World", 'my','Friend'];

// echo $chaines[2];

// associative array

$tableau_associatif = [
    'first_index' => 16,
    'second' => 78
];

$tableau_associatif['nouvelle_cle'] = 89;
echo $tableau_associatif['nouvelle_cle'];

$tableau_associatif['Interpreted'] = 'YES';
unset($tableau_associatif['Interpreted']);
echo $tableau_associatif['Interpreted'];