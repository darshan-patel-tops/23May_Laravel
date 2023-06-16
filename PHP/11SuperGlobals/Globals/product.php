

<?php 

require_once('header.php');

if (isset($_REQUEST['add']))
{
    print_r([$_REQUEST]);
    echo "<pre>";
    $_SESSION['cart_data'][] = [$_REQUEST['price']];
    echo "</pre>";
    
    
    
}


echo "<pre>";
print_r($_SESSION['cart_data']);


// print_r($_SESSION['product_data']);
echo "</pre>";
$products = $_SESSION['product_data'];



foreach ($products as $product) 
{
    echo "<pre>";
    // print_r($product);
?>
    <form action="" method="post">
    <!-- <input type="text" name="name" placeholder="Enter Your Username"class="form-control" id="inputEmail3"> -->


        
        <?php
    echo '<img src="'.$product[1].'" alt="image 1" height="100px">';
    echo '<br><p>'.$product[0].'</p>';
    echo "<input name='price' type='hidden' value='" . $product[0] . "'>";

    echo "<button type=submit name=add>Add To Cart</button>";
    
    ?>

</form>

<?php

    // echo '<img src="'.$product[1] .'">';
    // echo '<p></p>';
    
    echo "</pre>";


    // echo "<p>$product</p>";
}
?>

