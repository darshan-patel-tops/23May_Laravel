<?php

//Encapsulation means wrapping up the data in the single unit
class mobile
{
    function video()
    {
        echo "video<br>";
    }
    function sms()
    {
        echo "sms<br>";
    }
    function music()
    {
        echo "music<br>";
    }
    function youtube()
    {
        echo "youtube<br>";
    }
}
$object = new mobile;

$object->video();
$object->sms();
$object->music();
$object->youtube();

?>