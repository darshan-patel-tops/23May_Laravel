<?php

$a = array("volvo"=>"xc90","bmw"=>"x5","audi"=>"a8");

var_dump(array_key_exists("volvo",$a));
echo "<br>";
echo "<br>";
var_dump(in_array("volvo",$a));
echo "<br>";
echo "<br>";
var_dump(in_array("xc90",$a));
echo "<br>";
echo "<br>";
var_dump(array_search("a8",$a));
echo "<br>";
echo "<br>";
print_r(array_search("a8",$a));
echo "<br>";
echo "<br>";



?>