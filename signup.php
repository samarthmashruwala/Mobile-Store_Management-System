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
    <title>Mobile Hut - Mobile Shop | Sign up</title>
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
                        <div class="bg-light p-3 rounded">

                        <form action="signup-data.php" class="form" method="post" id="signupform">
                        <h2 class="text-center text-danger">Sign Up</h2>
                            <div class="form-group m-3">
                                <label for="fname" name="fname">First Name:</label>
                                <input type="text" name="fname" class="form-control rounded-pill" placeholder="First Name" id="fname"/>
                                <span class="text-danger" id="fnamecheck"></span>
                            </div>
                            <div class="form-group m-3">
                                <label for="lname" name="lname">Last Name:</label>
                                <input type="text" name="lname" class="form-control rounded-pill" placeholder="Last Name" id="lname"/>
                                <span class="text-danger" id="lnamecheck"></span>
                            </div>
                            <div class="form-group m-3">
                                <label for="phno" name="phno">Phone Number:</label>
                                <input type="text" class="form-control rounded-pill" name="phno" placeholder="Phone Number" id="number" />
                                <span class="text-danger" id="numbercheck"></span>
                            </div>
                            <div class="form-group m-3">
                                <label for="pin" name="pin">Pin Code:</label>
                                <input type="text" class="form-control rounded-pill" name="pin" placeholder="pincode" id="pin"/>
                                <span class="text-danger" id="pincheck"></span>
                            </div>
                            <div class="form-group m-3">
                                <label for="email" name="email">Email:</label>
                                <input type="email" name="email" class="form-control rounded-pill" placeholder="email address" id="email" />
                                <span class="text-danger" id="emailcheck"></span>
                            </div>
                            <div class="form-group m-3">
                                <label for="passwd" name="passwd">Password:</label>
                                <input type="password" name="passwd" class="form-control rounded-pill" placeholder="Password" id="pass"/>
                                <span class="text-danger" id="passcheck"></span>
                            </div>
                            <input type="submit" value="submit" id="submit" class="btn btn-outline-danger m-3 rounded-pill" name="btnsubmit" id="btnsubmit">
                            <div>
                            <p class="text-muted">Already Have an Account ?<button class=" btn text-danger border-0 shadow-none text-decoration-underline pb-2"><a class="text-danger" href="login.php">Log In</a></button></p>
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
    <script src="./js/validation.js"></script>
</body>
</html>