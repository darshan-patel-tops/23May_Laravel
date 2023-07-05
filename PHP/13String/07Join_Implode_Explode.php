<?php


echo $string = "Welc,om,e to the, t,op,s techn,ology";
$arr = explode(',',$string);
echo "<Pre>";

print_r($arr);
echo $implode = implode('',$arr);
echo "<br>";
echo $implode = join('   ',$arr);

echo "<br>";
echo "<br>";
echo "<br>";

$split = "TOPS Technology";
$split_array = str_split($split,10);

print_r($split_array);



?>