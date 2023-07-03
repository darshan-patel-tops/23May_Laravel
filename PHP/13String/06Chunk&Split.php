<?php


echo $string = "This is a demo demo string and it can hold alpha numerice value and you can basically write anything in this field no matter what 0-9 A-Z a-z @!#$%^&*()";

echo "<br>========Chunk Split=========<br>";

echo chunk_split($string);

echo "<br>========count characters=========<br>";

$str = "aaaa a a A A Ha ha ha";
echo $str;
echo "<pre>";
// print_r(count_chars($str));
print_r(count_chars($str,1));
// print_r(count_chars($str,2));

?>