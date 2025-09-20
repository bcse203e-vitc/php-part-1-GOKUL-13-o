<?php
function changeCase($array, $case = 'lower') {
    if ($case == 'lower') {
        return array_map('strtolower', $array);
    } else {
        return array_map('strtoupper', $array);
    }
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo "Values are in lower case.\n";
print_r(changeCase($Color, 'lower'));
echo "Values are in upper case.\n";
print_r(changeCase($Color, 'upper'));
?>
