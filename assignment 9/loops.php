<?php

// for loop
echo "For Loop: ";
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// while loop
echo "While Loop: ";
$i = 0;
while ($i < 5) {
    echo $i . " ";
    $i++;
}
echo "<br>";

// do-while loop
echo "Do-While Loop: ";
$i = 0;
do {
    echo $i . " ";
    $i++;
} while ($i < 5);
echo "<br>";

// foreach loop
$arr = array(1, 2, 3, 4, 5);
echo "Foreach Loop: ";
foreach ($arr as $value) {
    echo $value . " ";
}
echo "<br>";

?>
