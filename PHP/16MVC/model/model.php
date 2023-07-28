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

    public function login($data)
    {
        // print_r($_REQUEST);
        if(isset($_REQUEST['login_btn']))
        {
            // array_pop($_REQUEST);

            print_r($data);
        
        $SQL = "Select * from user where email='$data[username]'
        or mobile ='$data[username]' or username='$data[username]' and password='$data[password]'";
        echo $SQL;
        echo "<br>";
        $sqlex = $this->connection->query($SQL);
        if($sqlex->num_rows>0)
        {
            // print_r($sqlex->fetch_object()->role_as);
           if($sqlex->fetch_object()->role_as == 1)
           {
            // echo "inside if";
            header("location:admin/dashboard");
        }
        else
        {
            
            header("location:home");
           }
            
           
        }
        else
        {
            echo "<br>";
            // echo "inside else";
            echo "<script>alert('username or password is incorrect')</script>";
        }
    }
    }
    public function register($data)
    {
        if($data)
        {
            echo "<pre>";
            // echo "inside if";
            echo "<br>";
            // print_r($data);
            array_pop($data);
            // print_r(array_keys($data));
            $keysdata = implode(",",array_keys($data));
            $valuedata = implode("','",array_values($data));
            // echo $keysdata;
            echo "<br>";
            // echo $valuedata;
            echo "<br>";
            // $name = $_REQUEST['name'];
            // $password = $_REQUEST['password'];
            // $email = $_REQUEST['email'];
            // $mobile = $_REQUEST['mobile'];
            // $sql = "insert into user (name,password,email,mobile)" .
            // "values ('".$name . "','".$password."" . "','".$email."" . "','".$mobile."')";
            // // $value = "values ('".$name . "','".$password."" . "','".$email."" . "','".$mobile."')"  ;
            // echo $sql;
            
            echo "<br>";
            $SQL = "insert into user ($keysdata) VALUES ('$valuedata') ";
            // echo $SQL;

            // $query = $sql.$value;
            // echo $query;
            $this->connection->query($SQL); //this is how you perform query
            header("location:login");
            echo "</pre>";

        }
        else
        {
            // echo "No data found";
        }   
        // print_r($_REQUEST);
    }
}
// $object = new model;

?>