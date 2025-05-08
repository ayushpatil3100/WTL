<?php
$names = ["Sami", "Pruthvi", "Malhar"];

// Array Functions

echo "Original Array : ";
print_r($names);
array_push($names, "Atharv");

echo "<br/>Array push : ";
print_r($names);
array_pop($names);

echo "<br/>Array pop: ";
print_r($names);
array_unshift($names, "Sami");

echo "<br/>Array unshift: ";
print_r($names);
array_shift($names);

echo "<br/>Array shift: ";
print_r($names);
sort($names);

echo "<br/>Array sort: ";
print_r($names);

echo "<br/>Array rsort: ";
print_r($names);
rsort($names);
$reversed = array_reverse($names);

// echo "<br/>names: ";
// print_r($names);
echo "<br>Reversed: ";
print_r($reversed);
echo "<br><br>";
?>
