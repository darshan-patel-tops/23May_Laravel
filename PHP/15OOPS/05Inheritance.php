<?php

class car
{
    public function tyre()
    {
        echo "tyre<br>";
    }
    public function body()
    {
        echo "body<br>";
    }
    public function steering()
    {
        echo "steering<br>";
    }
}


class evcar extends car
{
    public function battery()
    {
        echo "battery<br>";
    }
    public function engine()
    {
        echo "engine<br>";
    }
}

$carkaobject = new evcar;

$carkaobject->battery();
$carkaobject->engine();
$carkaobject->tyre();
$carkaobject->body();
$carkaobject->steering();




?>