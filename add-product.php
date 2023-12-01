<?php
    require 'config.php';
    if(!isset($_SESSION)){
        session_start();
    }
    
    $targetDir = "assets/uploads/";
    $targetFile = $targetDir . basename($_FILES['image']["name"]);
    $uploadOk=1;
    $imageType=strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    if (isset($_POST['item']) && isset($_POST['price']) && isset($_POST['desc']) && isset($_FILES["image"])){
        print_r($_FILES["image"]);
        $item = $_POST['item'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // echo "file is an image-".$check["mime"]."...<br/>";
            $uploadOk=1;
        }
        else {
            echo "file is not an image";
            $uploadOk=0;
        }

        // check if file already exists
    if(file_exists($targetFile)){
        echo "sorry file is already exists.";
        $uploadOk=0;
    }

    // check if file size is greater than 500KB
    if($_FILES["image"]["size"]>500000){
        $_SESSION['message'] = "your file is greater than 500 KB.";
    }

    //check file extensions
    if($imageType != "jpg" && $imageType != "jpeg" && $imageType != "png" && $imageType != "gif"){
        $_SESSION['message'] = "sorry, only jpg, jpeg, png and gif files are allowed";
        $uploadOk=0;
    }

    // check if uploadOk set 0 give an error
    if($uploadOk == 0){
        $_SESSION['message'] = "your file was not uploaded";
    }
    else{
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$targetFile)){
            $_SESSION['message'] = "the file".htmlspecialchars(basename($_FILES["image"]["name"]))."has been uploaded";
        }
        else{
            $_SESSION['message'] = "there is some problem while uploading a file.";
        }
    }

    // $filename = $_FILES["image"]["name"];
    // $tempname = $_FILES["image"]["tmp_name"];
    // $folder = "../assets/uploads/".$filename;
    // move_uploaded_file($tempname,$folder);

        $query = "INSERT INTO product(item,price,item_description,product_image) values('$item','$price','$desc','$targetFile')";

        if(mysqli_query($conn,$query)){
            header("Location: admin-home.php");
            $_SESSION['message'] = "inserted successfully";
        }
        else{
            echo mysqli_error($conn);
            $_SESSION['message'] = "error while inserting.";
        }
    }
?>