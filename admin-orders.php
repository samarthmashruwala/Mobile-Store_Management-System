<?php
include 'config.php';
if(!isset($_SESSION)){
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
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./admin-css/style.css">
</head>
<body>
    <!-- Sidebar -->
    <section id="dashboard">

        <?php include 'admin-header.php'?>

    <!-- Page content -->
    <div class="content">
        <div class="header bg-danger">
            <h1>Welcome to the Orders Dashboard</h1>
        </div>
        <div class="card text-center">
            <h2>Placed Orders</h2>
        </div>
        <div class="card">
        <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <td>Order ID</td>
                        <td>Product Image</td>
                        <td>Customer Name</td>
                        <td>Customer email</td>
                        <td>Product Name</td>
                        <td>Product Price</td>
                        <td>Product Quantity</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // display data in table
                        $fetch_query = "select * from orders";
                        $result = mysqli_query($conn,$fetch_query);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr class="text-center  "><td valign="middle"><?=$row['oid']?></td><td valign="middle"><img src=<?=$row['product_image']?> alt='...' height='100px' width='100px'></td><td valign="middle"><?=$row['customer_name']?></td><td valign="middle"><?=$row['customer_email']?></td><td valign="middle"><?=$row['product_name']?></td><td valign="middle"><?=$row['product_price']?></td><td valign="middle"><?=$row['product_qty']?></td></tr>
                            <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </section>

</body>
</html>
