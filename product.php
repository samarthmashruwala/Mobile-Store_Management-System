<?php
    require 'config.php';
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['uid'])){
        header("Location: login.php");
    }

    $uid=$_SESSION['uid'];

    if(isset($_POST['add_to_cart']) && $_POST['add_to_cart'] == "Add to Cart"){
        $pid = $_POST['pid'];
        $cart_item=$_POST['cart_item'];
        $cart_price=$_POST['cart_price'];
        $cart_image=$_POST['cart_image'];
        $cart_qty=1;

            $insert_query="insert into cart(user_id,product_id,item_name,qty,amount,item_image) values('$uid','$pid','$cart_item','$cart_qty','$cart_price','$cart_image')";
            if(mysqli_query($conn,$insert_query)){
                $_SESSION['message'] = "product added successfully";
            }
            else{
                echo mysqli_error($conn);
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.js"></script>
    <title>Mobile Hut - Mobile Shop | Product</title>
</head>
<body>
    <!-- -------------------header navbar----------------- -->
    <?php
        include './templates/header.php';
    ?>

    <!-- ------------------------products list ------------------------- -->
    <section class="small-container">
        <div class="container my-3 py-3">
            <?php include 'message.php';?>
            <div class="text-center product-text">
                <h1>Latest Products</h1>
            </div>
            <div class="row my-5 py-3" id="search-data">
                <?php
                    $fetch_product= "select * from product";
                    $result = mysqli_query($conn,$fetch_product);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_row($result)){
                ?>
                <div class="col-lg-3 col-sm-12">
                    <div class="card my-3">
                        <form action="" method="post">

                            <div class="card-img my-4 p-img d-flex flex-column align-items-center">
                                <img src="<?=$row[4]?>" class="img-fluid product-img"  alt="">
                            </div>
                        <div class="card-body bg-light text-dark">
                            <h5 class="card-title"><?=$row[1]?></h5>
                            <p class="card-text">Price : <?=$row[2]?></p>
                            <p class="card-text">Details : <?=$row[3]?></p>
                            <p class="card-text rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <input type="hidden" name="pid" value="<?php echo $row[0]?>">
                            <input type="hidden" name="cart_item" value="<?php echo $row[1]?>">
                            <input type="hidden" name="cart_price" value="<?php echo $row[2]?>">
                            <input type="hidden" name="cart_image" value="<?php echo $row[4]?>">

                            <input type="submit" class="btn btn-outline-danger rounded-pill" name="add_to_cart" value="Add to Cart">
                                <i class="fa fa-cart-shopping text-danger"></i>
                            </input>
                        </div>
                        </form>
                    </div>
                </div>
                <?php
                    }
                }else{
                    ?>
            </div>
                <h1 class='empty'>Products Are Not Available !</h1>
                <?php
                }
                ?>
        </div>
    </section>
    
    <?php
        include './templates/footer.php';
    ?>
    <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                let search_text=$(this).val();
                // console.log(search_text);
                $.ajax({
                    url:"ajax-product-search.php",
                    method:"POST",
                    data:{search:search_text},
                    success:function(data){
                        $("#search-data").html(data);
                    }
                });
            })
        })
    </script>
</body>
</html>