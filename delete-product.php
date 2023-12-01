<?php
    require 'config.php';

    if(!isset($_SESSION)){
        session_start();
    }

    $pid = $_GET['pid'];

    $query="delete from product where pid=$pid";

    if(mysqli_query($conn,$query)){
        header("Location: admin-home.php");
        $_SESSION['message'] = "Deleted successfully";
    }
    else{
        echo mysqli_error($conn);
        header("Location: admin-home.php");
        $_SESSION['message'] = "error while Deleting.";
    }
?>