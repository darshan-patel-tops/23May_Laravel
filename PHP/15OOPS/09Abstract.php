<?php



abstract class rbi
{
    abstract function interest();
    function smscharge()
    {
        echo "sms charge function<br>";
    }


}

class bank extends rbi
{
    function interest()
    {
        echo "interest dedo <br>";
    }
    function calling()
    {
        echo "calling <br>";
    }
}

// $object = new rbi;
$object = new bank;
$object->interest();



?>