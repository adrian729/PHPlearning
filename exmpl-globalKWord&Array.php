<?php
$x = 5; // global scope

function myTest() {
    //Using global keyword!
    global $x;
    echo "<p>Variable x inside function is: $x</p>";
    //Using $GLOBALS[index] array
    $GLOBALS['x'] = $GLOBALS['x'] + 3;
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
