<?php
$original = array(1, 2, 3, 4, 5);
echo "Original array :\n";
echo implode(" ", $original) . "\n";
$element = '$';
$position = 3;
array_splice($original, $position, 0, $element);
echo "After inserting '$' the array is :\n";
echo implode(" ", $original) . "\n";
?>
