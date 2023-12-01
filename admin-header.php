<?php

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
    <link href="./admin-css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./admin-css/style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar bg-danger d-flex flex-column sidebar-links">
            <a href="admin-home.php">Dashboard</a>
            <a href="admin-user.php">User</a>
            <a href="admin-orders.php">Orders</a>
            <ul class="navbar-nav my-5 py-5">

                <li class="nav-item mx-5 sidebar-link"><a class="nav-link btn btn-outline-danger text-decoration-none text-light" href="logout.php">Log Out</a></li>
            </ul>

        </div>
</body>
</html>