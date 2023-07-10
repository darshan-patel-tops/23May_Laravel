<?php



class marriage
{
    

    public function __destruct()
    {
        echo "Called Destruct<br>";
    }
    public function shadi()
    {
        echo "shadi<br>";   
    }

    public function __construct()
    {
        // $hey = "hey";
        echo "Called Construct<br>";
        // return $hey;
    }
}

$marriage = new marriage;
$marriage->shadi();

//Construct is invoked by default when created
//construct never return anything
//it is init value


//Destruct is called at last
//it's position is not important
?>

