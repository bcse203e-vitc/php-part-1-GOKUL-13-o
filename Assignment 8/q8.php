<?php
$students = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "a)
 Ascending order sort by Value\n";
asort($students);
print_r($students);
$students = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "b)
 Ascending order sort by Key\n";
ksort($students);
print_r($students);
$students = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "c)
 Descending order sort by Value\n";
arsort($students);
print_r($students);
$students = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "d) Descending order sort by Key\n";
krsort($students);
print_r($students);
?>
