<?php
    require 'config.php';

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['uid'])){
        header("Location: login.php");
    }

    $uid = $_SESSION['uid'];
    $fname=$_SESSION['fname'];
    $email=$_SESSION['email'];

    if(isset($_POST['purchase']) && $_POST['purchase'] == 'purchase'){
        $product_id=$_POST['product_id'];
        $product_name=$_POST['product_name'];
        $product_price=$_POST['product_price'];
        $product_qty=$_POST['product_qty'];
        $product_image=$_POST['product_image'];

        $insert_query="insert into orders(product_id,customer_name,customer_email,product_name,product_price,product_qty,product_image) values('$product_id','$fname','$email','$product_name','$product_price','$product_qty','$product_image')";

        if(mysqli_query($conn,$insert_query)){
            
            $_SESSION['message'] = "Your Order Has been placed ! ";
            header('Location: product.php');
            $delete_from_cart = "delete from cart where user_id=$uid";
            mysqli_query($conn,$delete_from_cart);
        }
        else{
            echo $insert_query.mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>