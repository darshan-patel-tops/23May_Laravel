
<!-- get method is not secure -->
<!-- get method has limitation -->
<!-- you can send only 4kb data and only 1024 characters -->
<!-- you can not send file or any data which has a big size -->

<?php
// echo $_GET['username'];
// echo $_GET['email'];
// echo $_GET['password'];
if(isset($_GET["save"]))
{
    echo "GET METHOD";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

if(isset($_POST['save']))
{
    echo "POST METHOD";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
}

if(isset($_REQUEST['save']))
{
    echo "REQUEST METHOD";
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    
}

echo "<pre>";
print_r($_FILES);
echo "</pre>";


?>
<form action="" method="post" enctype="multipart/form-data">

<input type="text" name="username" placeholder="Enter Your Username">
<input type="email" name="email" placeholder="Enter Your Email">
<input type="password" name="password" placeholder="Enter Your Password">
<input type="file" name="image">
<button type="submit" name="save">Submit</button>
</form>