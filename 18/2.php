<?php

// Task 2

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "Original Array" . "<br>";
print_r($arr);
echo "<br>";

// ascending order sort by value
$arr_first = $arr;
asort($arr_first);
echo "<br></be>ascending order sort by value" . "<br>";
print_r($arr_first);

// ascending order sort by key
$arr_second = $arr;
ksort($arr_second);
echo "<br></be>ascending order sort by key" . "<br>";
print_r($arr_second);

echo "<br>";

// Descending order sort by value
$arr_third = $arr;
arsort($arr_third);
echo "<br></be>Descending order sort by value" . "<br>";
print_r($arr_third);

// Descending order sort by key
$arr_fourth = $arr;
krsort($arr_fourth);
echo "<br></be>Descending order sort by key" . "<br>";
print_r($arr_fourth);

