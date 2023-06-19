<?php
require_once('header.php');

if(isset($_REQUEST["clear"]))
{

    unset($_SESSION["product_data"]);

}

$carts =$_SESSION['cart_data'];


echo "<pre>";
print_r($carts);
echo "</pre>";





?>




<form action="" method="post">

<?php

    foreach ($carts as $cart) 
    {
        
        echo "<p >". $cart[0]  ."</p>";

    }
    echo '<button type="submit" name="clear">Clear cart</button>';
?>

</form>
