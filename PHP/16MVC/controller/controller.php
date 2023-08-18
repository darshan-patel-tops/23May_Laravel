

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
            case '/admin/update-user':
                if(isset($_REQUEST['id']))
                {

                    $data = $this->selectwhere("user",$_REQUEST);
                }
                    // print_r($data);
                    // exit;
                    require_once('view/adminheader.php');
                    require_once("view/admin/edituser.php");

                    if(isset($_REQUEST['update_btn']))
                    {   
                        // echo "<pre>";
                        // // echo "inside if";
                        // print_r($_REQUEST);
                        // print_r($_FILES);
                        // exit;
                        // echo "</pre>";
                        if(isset($_FILES))
                        {
                            $path = $_FILES["image"]["tmp_name"];
                            $destination = "upload/". $_FILES["image"]['name'];
                            $filename = $_FILES["image"]["name"];
                            move_uploaded_file($path,$destination);
                            
                        }
                        // unset($_REQUEST)
                        $this->update("user",$_REQUEST,$_REQUEST["id"]);
                    }
                

               
                    // require_once("view/adminfooter.php");
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
                $response = $this->select("user");
                // print_r($response);
                // print_r($_REQUEST);
if(isset($_REQUEST["update"]))
{
    $this->update("user","$_REQUEST[update]");
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