
<?php 

// $arr1 = ["names"=>"Admin","age"=>19];
// $arr2 = ["name"=>"User","age"=>19];
// $arr3 = ["name"=>"User1","age"=>19];


$a1 = array("a"=>"red","b"=>"green","c"=>"white");
$a2 = array("e"=>"red","f"=>"orange","z"=>"pink");


echo "<pre>";
print_r(array_diff($a2,$a1));

print_r(array_diff_key($a2,$a1));
print_r(array_diff_assoc($a2,$a1));
echo "</pre>";


?>