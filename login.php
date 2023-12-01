<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.js"></script>
    <title>Mobile Hut - Mobile Shop | Login</title>
</head>
<body>
    <!-- -------------------header navbar----------------- -->
    <div class="header">
    <?php
        include './templates/header.php';
    ?>  
<!-- --------------------------login and signuo----------------- -->

    <section class="account">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-sm-12 my-5 py-2">
                    <img src="./assets/product/i11.png" class="img-fluid" alt="...">
                </div>
            <div class="col-lg-6 col-sm-12 home-text my-5 py-2">
                <div class="form-container">
                    <div class="form-btn">
                        <div class="text-center m-2">

                            <button class="btn btn-outline-danger rounded-pill m-2" ><a class="text-decoration-none text-dark" href="login.php">Log In</a></button>
                            <button class="btn btn-outline-danger rounded-pill m-2"><a class="text-decoration-none text-dark" href="signup.php">Sign Up</a></button>
                        </div>
                        <?php
                            include 'message.php';
                        ?>
                        <div class="bg-light p-3 rounded">

                            <form action="login-data.php" class="form" method="post" id="loginform">
                                <h2 class="text-center text-danger">Login</h2>
                                <div class="form-group m-3">
                                <label for="email" name="email">Email:</label>
                                <input type="email" name="email" class="form-control rounded-pill" placeholder="email address"/ required>
                            </div>
                            <div class="form-group m-3">
                                <label for="passwd" name="passwd">Password:</label>
                                <input type="password" name="passwd" class="form-control rounded-pill" placeholder="Password"/ required>
                            </div>
                            <input type="submit" value="submit" class="btn btn-outline-danger m-3 rounded-pill" name="btnsubmit" id="btnsubmit">
                            <div>
                                <p class="text-muted">Don't Have An Account ?<button class=" btn text-danger border-0 shadow-none text-decoration-underline pb-2"><a class="text-danger" href="signup.php">Sign Up</a></button></p>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

    <?php
        include './templates/footer.php';
    ?>
    <script src="./js/script.js"></script>
</body>
</html>