<?php
/*
$x = 5;
 
function My_func() {
    $x = 8;

    // the variable x cannot be accessed in this fuction
    echo "Variable x inside the function is ". $x;

}
My_func();

echo "\nVariable x outside the function is $x";

*/


$name = "Dominion";

echo $name; // Works

function greet() {
    global $name;
    echo "\n".$name; // Works
}

greet();

?>