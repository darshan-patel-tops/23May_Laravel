<?php

require 'navbar.php';

echo "<pre>";
// print_r($_POST);
echo "</pre>";


if(isset($_POST['save'])){
    if($_COOKIE['name']==$_POST['name'] &&  $_COOKIE['pw']==$_POST['password']){
        $_SESSION['userdata'] = [$_POST['name'], $_POST['password']];
        print_r($_SESSION);
        header("location:index.php");
    }else{
        $_SESSION['msg'] = "wrong username or password";
    }
   
}
?>

<div class="container mt-4">
    <form class="w-50 m-auto mt-5" action="" method="post">
    <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" name="name" placeholder="Enter Your Username"class="form-control" id="inputEmail3">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control" id="inputPassword3">
    </div>
    <p class="text-danger text-center">
        <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg']; 
             }else{
               
             } ?>
         </p>
</div>
<button type="submit" name="save" class="form-control bg-dark mt-43btn btn-primary">Sign in</button>
<p class="text-center mt-4">Don't have an account? <a href="register.php">sign up</a></p>
    </form>
</div>


<?php
unset($_SESSION ['msg']);

?>