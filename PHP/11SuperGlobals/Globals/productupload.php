
<?php 

require_once('header.php');

?>

<form action="" method="post" enctype="multipart/form-data">
<input type="text" name="price">
<input type="file" name="image">
<button type="submit">Submit</button>
</form>


<?php


echo "<pre>";
if(isset($_FILES["image"]))
{
    $files = $_FILES["image"];
    // print_r($files);
    $destination = "image/".time().$files["name"];
    // echo $destination;
    // echo $files['tmp_name'];
    move_uploaded_file($files["tmp_name"],$destination);
   $_SESSION['product_data'][] = [$_REQUEST['price'], $destination];
    // print_r($_REQUEST);
    // echo "session data";
    print_r($_SESSION['product_data']);
    echo "<br>";
    // print_r($_FILES);
}

echo "</pre>";



?>