<?php 






// $connection = new mysqli("localhost","root","","23may_laravel");




function data()
{
    // echo "<pre>";
    $connection = new mysqli("localhost","root","","23may_laravel");
    $SQL = "sELECT * from user";
    $data = $connection->query($SQL);
    // print_r($data);
    if ($data->num_rows > 0) {
        while ($Fetch = $data->fetch_object()) {
            $FetchData[] = $Fetch;
        }
        // $Respose["Code"] = "1";
        // $Respose["Msg"] = "Success";
        $Respose["Data"] = $FetchData;
    }
    //  else {
        //     $Respose["Code"] = "0";
        //     $Respose["Msg"] = "Try again";
        //     $Respose["Data"] = 0;
        // }
        
        // print_r($Respose);
        
        $encode =  json_encode($Respose);
       print_r($encode);
        echo "<pre>";
        print_r(json_decode($encode));
        
        // echo "</pre>";
    // return $Respose;
}
data();


?>


