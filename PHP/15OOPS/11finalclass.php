<?php



final class fixed
{
    public function addition()
    {
        echo 2+2;
    }
}

class another extends fixed // final class cannot be inherited
{

}
$obj =  new fixed;
// $obj =  new another;
$obj->addition();










?>