<?php




class model
{

    public $connection;
    public function __construct()
    {

        try {
            //code...
            $this->connection = new mysqli("localhost","root","","23may_laravel");
            // echo "success";
        } catch (\Throwable $th) {
            // echo "fail";
            //throw $th;
        }    
    }

    public function register($data)
    {
        if($data)
        {
            // print_r($data);

        }
        else
        {
            echo "No data found";
        }   
        // print_r($_REQUEST);
    }
}
$object = new model;

?>