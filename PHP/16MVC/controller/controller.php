

<?php
require_once("model/model.php");
class controller extends model
{

    public $baseurl = "http://localhost/Batches/23May_Laravel/PHP/16MVC/assets/";
    public $adminurl = "http://localhost/Batches/23May_Laravel/PHP/16MVC/assets/admin/";
    public function __construct()
    {
        parent::__construct();

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
            case '/admin/dashboard':
                echo "<pre>";
                // print_r($_SERVER);
                echo "</pre>";
                    require_once('view/adminheader.php');
                    require_once("view/adminindex.php");
                    require_once("view/adminfooter.php");
                break;
            case '/admin/update':
                if (isset($_POST['update_btn'])) {
                    echo "Inside if";
                    if ($_FILES['prof_pic']['error'] == 0) {
                        $image = time().$_FILES['prof_pic']['name'];
                        
                            echo $image;
                        move_uploaded_file($_FILES['prof_pic']['tmp_name'], "upload/$image");
                    }else{
                        $image = $_REQUEST['prof_pic_old'];
                    }
                    $data=array("username"=>$_REQUEST['username'],
                    "name"=>$_REQUEST['name'],
                    "email"=>$_REQUEST['email'],
                    "image"=>$image,
                    "mobile"=>$_REQUEST['mobile']);
                    // echo "<pre>";
                    // print_r($newArray);
                    $res = $this->update('user',$data,array("id"=>$_REQUEST['id']));
                    // print_r($res);
                    // echo "</pre>";
                    
                    if ($res['Code'] == "1") {
                        header("location:all-users");
                    }else{
                        echo "<script>alert('Error while inserting try after sometime !!!!')</script>";
                    }
                }

                break;


            case '/admin/update-user':
             
                    // print_r($data);
                    echo "<pre>";
                    print_r($_REQUEST);
                    echo "</pre>";
                      if(isset($_REQUEST['id']))
                    {
    
                        $data = $this->selectwhere("user",$_REQUEST);
                    }
                    // exit;
                    require_once('view/adminheader.php');
                    require_once("view/admin/edituser.php");

                    // if (isset($_POST['update_btn'])) {
                    //     echo "Inside if";
                    //     if ($_FILES['prof_pic']['error'] == 0) {
                    //         $image = $_FILES['prof_pic']['name'];
                            
                    //             echo $image;
                    //         move_uploaded_file($_FILES['prof_pic']['tmp_name'], "upload/$image");
                    //     }else{
                    //         $image = $_REQUEST['prof_pic_old'];
                    //     }
                    //     $data=array("username"=>$_REQUEST['username'],
                    //     "name"=>$_REQUEST['name'],
                    //     "email"=>$_REQUEST['email'],
                    //     "image"=>$image,
                    //     "mobile"=>$_REQUEST['mobile']);
                    //     // echo "<pre>";
                    //     // print_r($newArray);
                    //     $res = $this->update('users',$data,array("id"=>$_REQUEST['userid']));
                    //     // print_r($res);
                    //     // echo "</pre>";
                        
                    //     if ($res['Code'] == "1") {
                    //         header("location:viewalluser");
                    //     }else{
                    //         echo "<script>alert('Error while inserting try after sometime !!!!')</script>";
                    //     }
                    // }



                  
                    break; 
            // case '/admin':
            //     echo "<pre>";
            //     // print_r($_SERVER);
            //     echo "</pre>";
            //         require_once('view/adminheader.php');
            //         require_once("view/adminindex.php");
            //         require_once("view/adminfooter.php");
            //     break;
            // case '/admin-index':
            //     echo "<pre>";
            //     // print_r($_SERVER);
            //     echo "</pre>";
            //         require_once('view/adminheader.php');
            //         require_once("view/adminindex.php");
            //         require_once("view/adminfooter.php");
            //     break;
            
                case '/login':
                echo "<pre>";
                // print_r($_REQUEST);
                
                // print_r($_REQUEST);
                    $data = $_REQUEST;
                    $this->login($data);
                echo "</pre>";
                    // require_once('view/header.php');
                    require_once("view/login.php");
                    // require_once("view/footer.php");
                break;


            case '/register':
                // echo "<pre>";
                // print_r($_REQUEST);
                // echo "</pre>";
                $validate = $_REQUEST;
                $this->register($validate);
                // $this->register($_REQUEST);
                require_once("view/register.php");
            break;
            
                case "/admin/update-user/":
                    echo "isnide page";
                        break;

            case '/admin/all-users':

                echo "<pre>";
                $Respose = $this->select("user");
                // print_r($Respose);
                // print_r($_REQUEST);
if(isset($_REQUEST["update"]))
{
    $this->update("user","$_REQUEST[update]",$_REQUEST['id']);
    print_r($_REQUEST);
}
                $this->delete($_REQUEST['id'],"user");
                echo "</pre>";
                // $this->fetchdata;
                // $this->select("");
                // print_r($_REQUEST);
                // exit;

                require_once('view/adminheader.php');
                require_once("view/admin/alluser.php");
                require_once("view/adminfooter.php");          
                break;
            default:
                print_r($_REQUEST);
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