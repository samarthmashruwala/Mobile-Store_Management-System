<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include 'config.php';

    if(isset($_POST['email']) && isset($_POST['passwd'])){
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

        $query = "select uid,fname,email,password,is_admin from user where email='$email' LIMIT 1";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            $isMatch = password_verify($passwd,$row['password']);
            if($isMatch){
                $_SESSION['uid']=$row['uid'];
                $_SESSION['fname']=$row['fname'];
                $_SESSION['email']=$row['email'];
                if($row['is_admin'] == '1'){
                    header("Location: admin-home.php");
                    exit;
                }
                header("Location: home.php");
                exit;
            }
            else{
                $_SESSION['message']="invalid username or password.";
                header("Location: login.php");
                echo $row['password'];
            }
        }
        else{
            $_SESSION['message']="User Not found.";
            header("Location: login.php");
        }
    }

    mysqli_close($conn);
?>