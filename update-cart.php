<?php
    require 'config.php';

    if(isset($_POST['update_qty_btn'])){
        $qty=$_POST['update_qty'];
        $id=$_POST['update_qty_id'];

        $query = "update cart set qty='$qty' where cid='$id'";
        if(mysqli_query($conn,$query)){
            header("location: cart.php");
        }

    }
?>