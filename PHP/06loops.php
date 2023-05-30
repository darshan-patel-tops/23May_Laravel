<?php


// for (initi; Condition; increment/decrenent) { 
// for ($i=0; $i < 4576; $i++) { 
//     echo "PHP<br>";
// }
for ($i=0; $i < 10; $i++) { 
    // echo "outer loop $i";
    for ($j=0; $j <= $i; $j++) { 
        // echo "inner loop $j";
        // echo " * ";
        // echo $i;
        echo $j*$i." ";
    }
    echo "<br>";
}

// $arr = [1,12,45,12,54,6,34,654,546,54,654,65,4,654,65,4,564,65,46,54,54,6,54,654,47,9];
$arr = ["username"=>"Test","password"=>"123"];
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];
// echo $arr[3];

// For accessing Array Elements STATR
foreach ($arr as $index => $value) {
    echo "<br>Key is $index => value is $value";
}
// For accessing Array Elements END

// 90% using for generating Array
$a = 15;
while ($a <= 10) {
    # code...
    echo "<br> while";
    $a++;
}


// Exit control START
$dowhile = 15;
do {
    echo "<br>Do while";
} while ($dowhile <= 10);
// Exit control END