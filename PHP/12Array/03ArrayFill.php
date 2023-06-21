<?php

$a = array_fill(0,5,"test");
echo"<pre>";
print_r($a);


$arr = ["TOPS","SG","Gujarat"];
$newarray = array_pad($arr,10,"Ahmedabad");

print_r($newarray);
echo"</pre>";
?>