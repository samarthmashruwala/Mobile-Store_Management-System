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
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Mobile Hut - Mobile Shop | Home</title>
</head>
<body>
    <!-- -------------------header and front view---------------------- -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <a class="navbar-brand" href="#">Mobile Hut</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link " href="product.php">Product</a></li>
                    <?php
                    if(isset($_SESSION['uid'])){
                        ?>
                    <li class="nav-item"><a class="nav-link" href="cart.php">Cart <i class="fa-solid fa-cart-shopping"></i></a></li>
                    <?php
                    }
                    else {
                        ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Cart <i class="fa-solid fa-cart-shopping"></i></a></li>
                        <?php
                    }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="about.php">About </a></li>
                </ul>
                <ul class="navbar-nav d-flex">
                    <input class="form-control rounded-pill" id="search" type="search" placeholder="Search">
                </ul>
                <ul class="navbar-nav d-flex">
                    <?php
                    if(isset($_SESSION['uid'])){
                        ?>
                        <li class="nav-item mx-5"><a class="btn btn-outline-danger rounded-pill" href="logout.php">Log Out</a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li class="nav-item mx-5"><a class="btn btn-outline-danger rounded-pill" href="login.php">Log In</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>