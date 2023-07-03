<?php

$string = "This is a demo demo string and it can hold alpha numerice value and you can basically write anything in this field no matter what 0-9 A-Z a-z @!#$%^&*()";

echo "String True";
 echo "<br>";
 echo stristr($string,"string",true);
 echo "<br>";
 echo stristr($string,"demo");
 
// echo substr($string,"Demo",true);




?>