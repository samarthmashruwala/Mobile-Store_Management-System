<?php
require 'config.php';
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop | Admin Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!-- Custom CSS for the dashboard -->
    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./admin-css/style.css">
</head>
<body>
    <!-- Sidebar -->
    <section id="dashboard">

        <?php include 'admin-header.php'?>

    <!-- Page content -->
    <div class="content">
        <?php include 'message.php';?>
        <div class="header bg-danger">
            <h1>Welcome to the Admin Dashboard</h1>
        </div>
        <div class="card">
            <h3 class="text-center">Manage Product</h3>
                <div class="col-lg-8 m-auto">

                    <form action="add-product.php" method="POST" class="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="pname" class="form-label">Product Name:</label>
                    <input type="text" name="item" class="form-control" placeholder="Product Name " required/>
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Product Price:</label>
                    <input type="text" name="price" class="form-control" placeholder="Product Price " required/>
                </div>
                <div class="form-group">
                    <label for="desc" class="form-label">Product Description:</label>
                    <textarea name="desc" id="desc" cols="20" rows="5" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="pname" class="form-label">Product Image:</label>
                    <input type="file" name="image" class="form-control" required/>
                </div>
                <input type="submit" class="btn btn-outline-danger rounded-pill my-4" name="btnsubmit" value="submit">
            </form>
            </div>
        </div>
        <div class="card">
            <!-- Button trigger modal -->


<!-- Modal -->

            <h2>Product details</h2>
            <?php
// display data in table
$fetch_query = "select * from product";
$result = mysqli_query($conn, $fetch_query);
if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="table">
        <thead class="thead-dark text-center">
            <tr>
                <td>Product Id</td>
                <td>Product Image</td>
                <td>Product Name</td>
                <td>Product Price</td>
                <td>Product Description</td>
                <td>Delete</td>
                <td>Update</td>
            </tr>
        </thead>
        <tbody>
            <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                <tr class="text-center  ">
                                    <td valign="middle"><?=$row['pid']?></td>
                                    <td valign="middle"><img src=<?=$row['product_image']?> alt='...' height='100px' width='100px'></td>
                                    <td valign="middle"><?=$row['item']?></td>
                                    <td valign="middle"><?=$row['price']?></td>
                                    <td valign="middle"><?=$row['item_description']?></td>
                                    <td valign="middle">
                                <a class="btn btn-outline-danger text-decoration-none " href='delete-product.php?pid=<?php echo $row['pid']; ?>'>Delete</a>
                            </td>
                            <td valign="middle">
                              <a class="btn btn-outline-primary text-decoration-none" href='update-product.php?pid=<?php echo $row['pid']; ?>'>Update</a>
                            </td></tr>
                            <?php
        }
}else{
    ?>
<h1 class='empty'>Products Are Not Available !</h1>
    <?php
}
?>
                </tbody>
            </table>
        </div>
    </div>
    </section>

</body>
</html>
