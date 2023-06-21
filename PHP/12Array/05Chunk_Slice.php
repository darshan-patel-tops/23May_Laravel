<?php

echo "<pre>";
$a = array("volvo","ferrari","RR","Mercedeas","BMW","Audi");
// echo "<pre>";
print_r($a);

print_r(array_chunk($a,2));
print_r(array_slice($a,2));

?>