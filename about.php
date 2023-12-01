<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Mobile Hut - Mobile Shop | About us</title>
</head>
<body>
     <!-- -------------------header navbar----------------- -->
     <?php
        include './templates/header.php';
    ?>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Welcome to Mobile Shop</h1>
            <p>Your Ultimate Destination for Mobile Innovation</p>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 about-content">
                <h2>Our Vision</h2>
                <p>We envision a world where technology enhances every aspect of your life. At Mobile Shop, we're dedicated to bringing you the latest and most innovative mobile devices that empower you to stay connected, productive, and entertained.</p>

                <h2>Why Choose Us?</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Latest Technology</h4>
                        <p>Discover the cutting-edge technology with our range of smartphones and accessories.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h4>Competitive Prices</h4>
                        <p>We offer competitive prices to ensure you get the best value for your money.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Passion for Innovation</h4>
                        <p>We share your passion for technology and innovation, driving us to provide exceptional products.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h4>Excellent Support</h4>
                        <p>Our friendly customer support team is here to assist you with any questions or issues.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11722.825903484842!2d72.82147897113204!3d21.223308576760264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1693993957358!5m2!1sen!2sin" width="600" height="660" style="border:0;" class="shadow rounded" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <?php
        include './templates/footer.php';
    ?>
</body>
</html>