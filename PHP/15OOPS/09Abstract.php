<?php



abstract class abstractclass
{
    abstract function complusory()
    {
        
    }
    function functionname()
    {
        echo "Called function<br>";
    }


}

class inherited extends abstractclass
{
    function calling()
    {
        echo "calling <br>";
    }
}

$object = new inehrited;



?>