<?php

/*

i= intilization
c= condition

u= updation

//when you know the condition and intialization you will use for loop

*/
// $food =1;

$items = ["dosa","punjabi","pizza","tandoori","biryani"];
for($food=0; $food<5; $food++)
{
    echo "food items are $items[$food]<br>";
    // echo"Hello this is for loop $food<br>";
}
echo "end for loop";

// echo"Hello this is for loop 1";
// echo"Hello this is for loop 2";
// echo"Hello this is for loop 3";


$name =["Fazil","Kishan","Darshan "];

for($memb=0; $memb<5; $memb++)
{
    
    echo "<br> This is our php class member and name is $name[$memb]<br>";

}

?>