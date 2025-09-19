<?php
$color = array('white', 'green', 'red', 'blue', 'black')
$sentence = "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
$sentence = str_replace('red', $color[2], $sentence);
$sentence = str_replace('green', $color[1], $sentence);
$sentence = str_replace('white', $color[0], $sentence);
echo $sentence;
?>

