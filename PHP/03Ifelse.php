<?php 


$age = 20;


if($age>18)
{
    echo"You can drink water with chai<br>";

    if($age>22)
    {
        echo "you can drink water with alcohol<br>";
    }
    else{
        echo "you cannot drink alochol<br";
    }

}
elseif($age>=15)
{
    echo "you can drink water with juice<br>";
}
else
{
    echo "you can only drink water<br>";
}



?>