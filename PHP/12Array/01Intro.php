<h1>Welcome to the Land  Of Array</h1>


<?php

// Index Array[Key Numeric Only] // starts from 0
$arr = array("name",false,1,2.45,);

echo "<pre>";
print_r($arr);

echo $arr[0];
echo "</pre>";

foreach($arr as $key => $value)
{
    echo " $key is and $value is ";
    echo "<br>";
}

// Associative Array it can hold numeric and alpha numeric value user defined
$assocarr = ["sports"=>100,"english"=>105,"hindi"=>99,"SS"=>67,"drama"=>87];

echo "<pre>";
print_r($assocarr);
echo $assocarr["sports"];
echo "</pre>";


foreach ($assocarr as $key => $value) 
{
    echo "$key is $value is <br>";
}



// MultiDimensional Array
$multiarr = array(
"DPS"=>
array("10th_Standard"=>
array("parth"=>array("sports"=>35,"music"=>45),
"mustafa"=>array("ss"=>60,"sports"=>80)),
"11th_Standard"=>
array("adnan"=>
array("sports"=>60,"music"=>33)
)));
echo"<br>";

// foreach ($multiarr as $key => $value) {
    //     echo "$key is and $value is";
    // }
    echo "<pre>";
    print_r(array_column($multiarr,'10th_Standard'));
print_r($multiarr);
echo $multiarr["DPS"]["11th_Standard"]["adnan"]["music"];
echo "</pre>";
?>