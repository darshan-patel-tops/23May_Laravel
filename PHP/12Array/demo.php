<?php

// INDEX ARRAY

// $indexArr = array("tops",true,false,50,5.5);
// $indexArr1 = ["tops",true,false,50,5.5];
// echo "<pre>";
// print_r($indexArr);
// print_r($indexArr1);

// // Associative array
// $associativeArray = ["name"=>"kishan","number"=>132465789,"percent"=>85];
// print_r($associativeArray);

// Multidimensional array

$multiDimension = array(
    "tops" => array(
        "PHP" => array(
            "Kishan" => array("marks"=>96,"behaviour"=>"good","attendance"=>100),
            "Admin" => array("marks"=>92,"behaviour"=>"average","attendance"=>75),
        ),
        "NodeJS" => array(
            "Fazil" => array("marks"=>99,"behaviour"=>"Vgood","attendance"=>100),
            "User" => array("marks"=>85,"behaviour"=>"bad","attendance"=>30),
        )
    )
        );
        echo "<pre>";
        print_r($multiDimension);
?>