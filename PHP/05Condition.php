<?php
$username = "TOPS"; // varabile declaration with init value  = use for assignemnt
// if ($username == "TOPS") {
//     echo "wah";
// }else{
//     echo "not valid";
// }
$marks = 905; // varabile declaration with init value  = use for assignemnt

if ($marks >= 0 && $marks <= 100) {
    if ($marks >= 50) {
        if ($marks >= 50 && $marks < 60) {
            echo "bachi gyo";
        }else if ($marks >= 60 && $marks < 70) {
            echo "First Class";
        }else if ($marks >= 70 && $marks < 90) {
            echo "Dist";
        }else if ($marks >= 90 && $marks <= 100) {
            echo "More than enough";
        }
    }else{
        echo "Try again";
    }
}else{
    echo "invalid marks";
}
$Days = "something";
switch ($Days) {
    case 'Mon':
        echo "Monday";
        break;
    case 'something':
        echo "data varified inside something";
        break;
    
    default:
        # code...
        break;
}

?>