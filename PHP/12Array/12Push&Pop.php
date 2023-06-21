<?php


$a = array("red","green","orange","white");
print_r($a);


echo "<br>";
echo "<br>";

array_pop($a);

echo "<br>";
echo "<br>";

print_r($a);


echo "<br>";
echo "<br>";

$b = array("oink","white");

echo "<br>";
echo "<br>";
array_push($b,"yellow","red");


print_r($b);



function abc($a1,$a2)
{
    return $a1 . "_" . $a2;
    
    
}

echo "<br>";
echo "<br>";

$array = array("dog","cat","lion");

echo(array_reduce($array,"abc"));

echo "<br>";
echo "<br>";
shuffle($array);
print_r($array);

?>