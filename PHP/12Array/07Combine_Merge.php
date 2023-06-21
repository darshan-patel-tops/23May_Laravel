<?php


$name = array("a"=>"Peter","z"=>"Thor","c"=>"Iron Man","q"=>"Captain");
$age = array("a"=>21,"z"=>100,"o"=>2000,"c"=>55);

//Length should be Equal
$newarray = (array_combine($name,$age));
print_r($newarray);
echo "<br>";
print_r(array_merge($name,$age));
//It will overwrite the last value



echo "<br>";
$a = array("test"=>10,20,30,40);
$b = array("test"=>'a','b','c','d');

echo "<br>";

echo "array merge example";
echo "<br>";
echo "<br>";

echo "<pre>";
print_r(array_merge($a,$b));
echo "array merge recursive";
echo "<br>";
print_r(array_merge_recursive($a,$b));
echo "</pre>";
?>