<?php
function myTest() {
  $x = 5; // local scope
  echo "Variable x inside function is: $x";
}
myTest();

// using x outside the function will not work
echo "Variable x outside function is: $x";

?>