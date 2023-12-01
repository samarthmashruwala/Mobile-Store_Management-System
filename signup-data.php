<?php
    include 'config.php';
    
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phno']) && isset($_POST['passwd']) && isset($_POST['pin'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $hashpasswd = password_hash($_POST['passwd'],PASSWORD_DEFAULT);
        $pin = $_POST['pin'];

        $query1 = "select * from user where email ='$email' AND password='$hashpasswd'";

        $result = mysqli_query($query1);

        if(mysqli_num_rows($result) == 1){
            echo "duplicate data";
        }
        else{

            
            $query = "INSERT INTO user(fname,lname,email,phone_num,pincode,password) VALUES('$fname','$lname','$email','$phno','$pin','$hashpasswd')";
            
            if(mysqli_query($conn,$query)){
            header("Location: login.php");
        }
        else{
            $_SESSION['message'] = "invalid request";
        }
    }
    }
?>