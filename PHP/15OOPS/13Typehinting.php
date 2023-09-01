<?php




class first 
{
    public function call(second $obj2) //Type hinting
    {
        echo "Call<br>";
        $obj2->sms();
    }
    // public function youtube()
    // {
    //     $obj2->sms();
    // }
}

class second 
{
    public function sms()
    {
        echo "Sms<br>";
        // $this->call();
    }
}


$obj = new first;
$obj2 = new second;
$obj->call($obj2);
// $obj->sms();








?>