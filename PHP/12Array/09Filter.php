<?php 


function test_odd($b)
{

    echo $b*$b."<br>";
    return ($b*$b);

}


echo "<br>";
$a = array(10,2,3,4);
$a1 = array("a"=>"red","b"=>12);

echo "<pre>";

print_r(array_filter($a,"test_odd"));
print_r(array_keys($a1));
echo "<pre>";


?>