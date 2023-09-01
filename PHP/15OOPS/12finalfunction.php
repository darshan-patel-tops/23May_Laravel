<?php


class calc
{
    final function addition()
    {
        echo 100+100;
    }
}


class calc2 extends calc
{
    public function addition() // you cannot override final function
    {
        echo 20+20;
    }
}

$obj = new calc2;
$obj->addition();





?>