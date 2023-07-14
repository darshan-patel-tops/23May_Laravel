<?php

class controller
{
    public function __construct()
    {
        require_once("view/header.php");
        require_once("view/index.php");
        require_once("view/footer.php");
        echo "<pre>";
        // print_r($_SERVER);
        echo "</pre>";
        // if(isset($_SERVER['PATH_INFO']))
        // {

        //     echo "if";
        // }
        // else
        // {
        //     echo "else";
        //     header("location:home");
        // }
    }
    // function index()
    // {
    //     require_once("view/index.php");
    //     // return view("view");
    // }
}



$object =  new controller;
// $object->index();




?>

<!-- <h1>welcome to controller</h1> -->