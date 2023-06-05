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

// $marks = 75;
// if($marks >= 0 && $marks <= 100)
// {
//     if($marks >= 33 && $marks <= 50)
//     {
//         echo "Passed with good marks";
//     }
//     elseif($marks >= 51 && $marks <=80 ){
//         echo "Distinction";
//     }
//     elseif($marks >=81){
//         echo "very Good";
//     }
//     else{
//         echo "failed";
//     }
// }
// else{
//     echo "wrong input";
// }

$score = 85;
$attendance = 80;

if ($score >= 90) {
    if ($attendance >= 90) {
        echo "Excellent performance and attendance!";
    } else {
        echo "Excellent performance, but attendance needs improvement.";
    }
} elseif ($score >= 80) {
    if ($attendance >= 90) {
        echo "Good job on performance and attendance!";
    } else {
        echo "Good job on performance, but attendance needs improvement.";
    }
} elseif ($score >= 70) {
    if ($attendance >= 90) {
        echo "Not bad on performance, but attendance is excellent!";
    } else {
        echo "Not bad on performance, but both attendance and performance need improvement.";
    }
} else {
    if ($attendance >= 90) {
        echo "You need to improve your performance, but your attendance is excellent!";
    } else {
        echo "You need to improve both your performance and attendance.";
    }
}



?>