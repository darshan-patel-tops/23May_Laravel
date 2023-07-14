<!-- 
__construct(),
__destruct(),
__call(),
__callStatic(),
__get(),
__set(),
__isset(),
__unset(),
__sleep(),
__wakeup(),
__serialize(),
__unserialize(),
__toString(),
__invoke(),
__set_state(),
__clone(),
__debugInfo()
 -->

<?php


 class magic
 {
    public $fazil="fazil is bright student<br>";
    public $kishan="kishan is bright student<br>";
    public function name()
    {
        echo "Called name Function<br>";
    }
    // public function __construct()
    // {
    //     echo "Called Construct<br>";
    // }
    // public function __destruct()
    // {
    //     echo "Called Destructor<br>";
    // }



    public function __get($name)
    {
        echo "called __get function ".$name." <br>";
    }
    public function __set($name,$value)
    {
        echo "Called set function";
        echo "<br>The name is $name and the value is $value<br>";
    }
    public function __call($functionname,$param)
    {   
        echo "<br>";
        echo "Called call function";
        echo "<br>";
        echo $functionname;
        echo "<br>";
        print_r($param);
        echo "<br>";
    }
 }


$magic = new magic;
$magic->name();
echo$magic->fazil;
echo$magic->kishan;
$magic->tops;
$magic->ahmedabad;
$magic->name1="kishan";
$magic->name2="fazil";
$magic->kuchbhi("m nahi batata");
$magic->ahmedabad("ahmedabad is the best city");

?>