<?php
require 'navbar.php';

if(isset($_POST['save'])){
    echo "<pre>";
    print_r($_POST);

    setcookie("name", $_POST['name'], time()+3600);
    setcookie("email", $_POST['mail'], time()+3600);
    setcookie("pw", $_POST['password'], time()+3600);
    echo "</pre>";
    header("location:login.php");
}

?>


<div class="container mt-4">

    <form class="w-50 m-auto mt-5" method="post">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" name="name" placeholder="Enter Your Username"class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="mail"  placeholder="Enter Your Email"class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control" id="inputPassword3">
    </div>
</div>
<button type="submit" name="save" class="form-control mt-4 bg-dark btn btn-primary">Sign Up</button>
<p class="text-center mt-4">already have an account? <a href="login.php">login</a></p>
</form>
</div>