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
            echo "fail";
            //throw $th;
        }    
    }

    public function register($data)
    {
        if($data)
        {
            echo "<pre>";
            echo "inside if";
            echo "<br>";
            print_r($data);
            echo "<br>";
            $name = $_REQUEST['name'];
            $password = $_REQUEST['password'];
            $email = $_REQUEST['email'];
            $mobile = $_REQUEST['mobile'];
$sql = "insert into user (name,password,email,mobile)" . "values ('".$name . "','".$password."" . "','".$email."" . "','".$mobile."')";
            // $value = "values ('".$name . "','".$password."" . "','".$email."" . "','".$mobile."')"  ;
            echo $sql;
            // $query = $sql.$value;
            // echo $query;
            $this->connection->query($sql); //this is how you perform query
            echo "</pre>";

        }
        else
        {
            echo "No data found";
        }   
        // print_r($_REQUEST);
    }
}
// $object = new model;

?>