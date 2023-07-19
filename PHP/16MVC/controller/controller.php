<?php

class controller 
{

    public $baseurl = "http://localhost/Batches/23May_Laravel/PHP/16MVC/assets/";

    public function __construct()
    {
        // echo "<pre>";
        // print_r($_SERVER['PATH_INFO']);
        // print_r($_SERVER);   
        if(isset($_SERVER['PATH_INFO']))
        {

        
        switch($_SERVER['PATH_INFO'])
        {
            case '/home':
                echo "<pre>";
                // print_r($_SERVER);
                echo "</pre>";
                    require_once('view/header.php');
                    require_once("view/index.php");
                    require_once("view/footer.php");
                break;
          
            default:
                echo "inside default";
        }
        }
        else
        {
            echo "inside else";
            header("location:home");
        }
        // echo "</pre>";
    }
}


$controller = new controller;
















?>