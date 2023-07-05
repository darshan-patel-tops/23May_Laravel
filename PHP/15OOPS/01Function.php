<?php

echo "Welcome To The World Of OOPS";
//There are 2 types of function user defined and system defined(inbuilt function)

// echo and many other which are given to us by php by default are called inbuilt function

function call()
{
    echo "<br>Call function";
}

call();
call();



function addition()
{
    $a = 76;
    $b = 24;
    echo "<br>".$a+$b;
}

function addwithpara($a,$b) //Arguement
{
    echo "<br>". $a+$b;
}

addition();
addition();


$a= 100;
$b=100;
$c=200;
$d=500;
addwithpara(1,3); //Parameter
addwithpara($a,$b);
addwithpara($c,$d);

?>