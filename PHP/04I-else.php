<?php
{{  }}


// if($marks>33)
// {
//     echo"Pappu pass hogaya";
// }
// else
// {
//     echo "well tride";
// }


// if($marks>=33 && $marks<=50)
// {
//     echo "pass hogaya mushkil se";
// }
// elseif($marks>=51 && $marks<=80)
// {
//     echo " bahot padh liya";
// }
// elseif($marks>=81 && $marks<=100)
// {
//     echo "aur kitna padhega bhai isme mere jaise 3 pass hojaye";
// }
// elseif($marks>=101)
// {
//     echo "Baap ka college / apsara";
// }
// else{
//     echo"fail";
// }

$marks = 75;
if($marks >= 0 && $marks <= 100)
{
    if($marks >= 33 && $marks <= 50)
    {
        echo "Passed with good marks";
    }
    elseif($marks >= 51 && $marks <=80 ){
        echo "Distinction";
    }
    elseif($marks >=81){
        echo "very Good";
    }
    else{
        echo "failed";
    }
}
else{
    echo "wrong input";
}




?>