<?php


date_default_timezone_set("asia/kolkata");

class model
{

    public $connection;
    public function __construct()
    {

        try {
            //code...
            $this->connection = new mysqli("localhost","root","","23may_laravel");
            // echo "success";
        } catch (Exception $e) {
            echo "fail";
            //throw $th;
            if (!file_exists("log")) {
                mkdir("log");
            }
            $msg = "Error DateTime =>> " . date('d-m-Y H:i:s A');
            $msg .= PHP_EOL . "Error Msg =>> " . $e->getMessage();
            file_put_contents("log/" . date('d_m_Y') . "_log.txt", PHP_EOL . $msg . PHP_EOL, FILE_APPEND);
            echo $e->getMessage();
            exit;
            
        }    
    }


    public function select($tbl, $where = "") 
    {
        $SQL = "SELECT * FROM $tbl"; //this is a dynamic parameter recv krya 
        if ($where != "") {
            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= " $key = $value AND";
            }
            $SQL = rtrim($SQL, "AND");
        }
        // echo $SQL;
        // exit; 
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($Fetch = $SQLEx->fetch_object()) {
                $FetchData[] = $Fetch;
            }
            $Respose["Code"] = "1";
            $Respose["Msg"] = "Success";
            $Respose["Data"] = $FetchData;
        } else {
            $Respose["Code"] = "0";
            $Respose["Msg"] = "Try again";
            $Respose["Data"] = 0;
        }
        return $Respose;
        // exit;
    }

    public function login($data)
    {
        // print_r($_REQUEST);
        if(isset($_REQUEST['login_btn']))
        {
            // array_pop($_REQUEST);

            // print_r($data);
        
        $SQL = "Select * from user where email='$data[username]'
        or mobile ='$data[username]' or username='$data[username]' and password='$data[password]'";
        // echo $SQL;
        echo "<br>";
        $sqlex = $this->connection->query($SQL);
        if($sqlex->num_rows>0)
        {
             // $FetchData = $sqlex->fetch_all(); // numeric Array 
            // $FetchData = $sqlex->fetch_array();  // numeric and assoc
            // $FetchData = $sqlex->fetch_assoc();  //  assoc
            // $FetchData = $sqlex->fetch_field();  //  table column
            // $FetchData = $sqlex->fetch_row();  //  single and only numeric array
            $fetchdata = $sqlex->fetch_object();  //  object res
            // print_r($fetchdata);
            // print_r($fetchdata->role_as);
            
            // print_r($sqlex->fetch_object());  //  object res
            // print_r($sqlex->fetch_object()->role_as);
           if($fetchdata->role_as == 1)
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



    public function delete($id,$table)
    {
        // $SQL = "DELETE  FROM $table where id=$id";
        // echo $SQL;
        // echo "<script> alert('are you sure???')  </script>";
        // $this->connection->query($SQL);




    }
    public function update($tbl, $data, $where)
    {
        $SQL = "UPDATE $tbl SET ";
        foreach ($data as $key => $value) {
            $SQL .= " $key ='$value',";
        }
        $SQL = rtrim($SQL, ",");
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL, "AND");
        echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Respose["Code"] = "1";
            $Respose["Msg"] = "Success";
            $Respose["Data"] = "1";
        } else {
            $Respose["Code"] = "0";
            $Respose["Msg"] = "Try again";
            $Respose["Data"] = 0;
        }
        return $Respose;
    }

    public function selectwhere($table,$where = "")
    {

        // echo "Inside function";
        // echo "$table";
        // echo "$where";
        // exit;
        $SQL = "Select * from $table";
        // print_r($SQL);
        // echo $SQL;

        if($where != "")
        {
            $SQL .= " WHERE ";

            foreach($where as $key => $value)
            {
                $SQL .= " $key = $value AND";
            }
            $SQL = rtrim($SQL, "AND");

        }
        // echo $SQL;
        // exit;
        $sqlex= $this->connection->query($SQL);
        // print_r($sqlex);
        if($sqlex->num_rows>0)
        {
            echo "<pre>";
            // foreach()
            // {

                while ( $fetchdata = $sqlex->fetch_object()) 
                {
                    $data[]=$fetchdata;
                    // $data[]=$sqlex;
                }
            // $fetchdata = $sqlex->fetch_object();
            // }
            // print_r($data);
            // exit;
            echo "</pre>";
            return  $response['data']=$data;
        }
        else
        {
            echo "<h1>No data found</h1>";
        }
    }
}
// $object = new model;
// $object->selectwhere("user","name");

?>