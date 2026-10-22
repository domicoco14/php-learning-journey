<?php

function myTest() {
  static $x = 0; // static scope
  echo $x;
  $x++;
}

myTest();
echo "\n";
myTest();
echo "\n";
myTest();

?>

<?php

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
S
?>