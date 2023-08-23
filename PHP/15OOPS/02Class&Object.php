<?php


// Class consists of only 2 things
// 1.Data Member //Variables
// 2. Member Function //Function

class iphone
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
}
$object = new iphone;
//object is necessary to access class
// video();
// iphone::video();

$object->video();
$object->sms();
$object->music();

?>