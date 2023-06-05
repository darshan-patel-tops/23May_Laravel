<?php

$day = "thursday";

switch ($day) 
{
    case 'monday':
        echo "it is monday<br>";
        break;
    case 'tuesday':
        echo "it is tuesday<br>";
        break;
    case 'wednesday':
        echo "it is wednesday<br>";
        break;
    case 'thursday':
        echo "it is thursday<br>";
        break;
    case 'friday':
        echo "it is friday<br>";
        break;
    case 'saturday':
        echo "it is saturday<br>";
        break;
    case 'sunday':
        echo "it is sunday<br>";
        break;
    
    default:
    echo "invalid day<br>";
        break;
}


$sum = "modular";
$num1 = 64;
$num2 = 14; 



switch($sum){
    case "addition":
        echo $num1+$num2;
        break;
    
    case "multiplication":
        echo $num1 * $num2;
        break;

    case "subtraction":
        echo $num1 - $num2;
        break;

    case "divide";
        echo $num1/$num2;
        break;

    case "modular":
        echo $num1 % $num2;
        break;

    default:
        echo "Invalid method";
        break;
}


?>



