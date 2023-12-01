<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mobile_store";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        echo "error while accessing database".mysqli_error_connect();
    }
?>