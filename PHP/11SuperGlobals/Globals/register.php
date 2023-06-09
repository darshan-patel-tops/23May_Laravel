
<?php 
require_once('header.php');
echo "<pre>";

if(isset($_REQUEST["save"]))
{

    print_r($_REQUEST);

    setcookie("name",$_REQUEST['name'],time()+3600);
    setcookie("mail",$_REQUEST['mail'],time()+3600);
    setcookie("password",$_REQUEST['password'],time()+3600);
}


// print_r($_REQUEST);



echo "</pre>";



?>

<div class="container mt-4">

    <form method="post">
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
<button type="submit" name="save" class="btn btn-primary">Sign Up</button>
</form>
</div>