<?php

$a = array(

    array(
        'id'=>1,
        'name'=>"Mohammed",
        'marks'=>89,
    ),
    array(
        'id'=>2,
        'name'=>"Darshan",
        'marks'=> 105
    ),
    array(
        'id'=>3,
        'name'=>"Virat",
        'marks'=>99
    )

    );

    echo "<pre>";
    print_r($a);

    foreach ($a as $key => $value) 
    {
        $data[]=$value['name']; // Also Good Way
        echo $value['name']."<br>";  //Also the other way
    }

    print_r($data);

    print_r(array_column($a,'name')); //Best way but for 2d array
    echo "</pre>";


?>