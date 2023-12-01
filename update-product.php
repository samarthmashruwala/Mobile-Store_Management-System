<?php
require 'config.php';
if(!isset($_SESSION)){
    session_start();
}
$pid = $_GET['pid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!-- Custom CSS for the dashboard -->
    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./admin-css/style.css"></head>
    <title>Mobile Shop | Admin Dashboard</title>

<body>
<div class="header bg-danger">
            <h1>Welcome to the Update Panel</h1>
        </div>
        <div class="card">
            <h3 class="text-center">Manage Product</h3>
                <div class="col-lg-8 m-auto">
                    <?php
                        $fetch_query = "select * from product where pid=$pid";
                        $result=mysqli_query($conn,$fetch_query);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_row($result)){
                        
                    ?>

                    <form action="#" method="POST" class="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="pname" class="form-label">Product Name:</label>
                    <input type="text" name="item" class="form-control" placeholder="Product Name " value="<?=$row[1]?>" required/>
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Product Price:</label>
                    <input type="text" name="price" class="form-control" placeholder="Product Price" value="<?=$row[2]?>" required/>
                </div>
                <div class="form-group">
                    <label for="desc" class="form-label">Product Description:</label>
                    <textarea name="desc" id="desc" cols="20" rows="5" class="form-control" required><?=$row[3]?></textarea>
                </div>
                <div class="form-group">
                    <label for="pname" class="form-label">Product Image:</label>
                    <input type="file" name="image" class="form-control" value="<?=$row[4]?>" required/>
                </div>
                <input type="submit" class="btn btn-outline-danger rounded-pill my-4" name="btnsubmit" value="submit">
            </form>
            <?php
                            }
                        }
            ?>
            </div>
        </div>

        <?php
            if (isset($_POST['item']) && isset($_POST['price']) && isset($_POST['desc']) && isset($_FILES["image"])){
                $targetDir = "assets/uploads/";
                $targetFile = $targetDir . basename($_FILES['image']["name"]);
                $uploadOk=1;
                $imageType=strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                // print_r($_FILES["image"]);
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
                $_SESSION['message'] = "sorry file is already exists.";
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
                    echo "the file".htmlspecialchars(basename($_FILES["image"]["name"]))."has been uploaded";
                }
                else{
                    $_SESSION['message'] = "there is some problem while uploading a file.";
                }
            }
        
            // $filename = $_FILES["image"]["name"];
            // $tempname = $_FILES["image"]["tmp_name"];
            // $folder = "../assets/uploads/".$filename;
            // move_uploaded_file($tempname,$folder);
        
                $query = "update product set pid=$pid, item='$item', price='$price', item_description='$desc', product_image='$targetFile' where pid=$pid ";
        
                if(mysqli_query($conn,$query)){
                    header("Location: admin-home.php");
                    $_SESSION['message'] = "Updated successfully";
                }
                else{
                    echo mysqli_error($conn);
                    header("Location: admin-home.php");
                    $_SESSION['message'] = "error while Updating.";
                }
            }
        ?>
</body>
</html>