<?php
    require 'config.php';

    if(!isset($_SESSION)){
        session_start();
    }
    $cid = $_GET['cid'];

    $query="delete from cart where cid=$cid";

    mysqli_query($conn,$query);
    
    header("Location: cart.php");
?>