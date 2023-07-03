<?php


echo $string = "Welcome to the, tops technology";
$arr = explode(',',$string);
echo "<Pre>";

print_r($arr);
echo $implode = implode('    ',$arr);
echo "<br>";
echo $implode = join('   ',$arr);

echo "<br>";
echo "<br>";
echo "<br>";

$split = "TOPS Technology";
$split_array = str_split($split,2);

print_r($split_array);



?>