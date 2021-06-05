<?php

$tableau = ["Hello", "World", "my", "friend"];

// For Loop
// for ($i=0; $i < 10; $i=$i+1) { 
//     echo "this is the number $i message<br>";
// }

$tableau[] = "please";

// for ($i=0; $i < count($tableau); $i++){
//     echo $tableau[$i];
//     echo " ";
// }

// foreach ($tableau as $value) {
//     echo "$value ";
// }


// while loop
$i = 0;
$b = TRUE;
while($i <= 10 && $b){
    echo "this is the number $i message";
    $i=$i + 2;
}
