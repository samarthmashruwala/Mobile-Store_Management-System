<?php
    require 'config.php';
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['uid'])){
        header("Location: login.php");
    }

    $uid = $_SESSION['uid'];
    $fname=$_SESSION['fname'];
    $email=$_SESSION['email'];
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
    <title>Mobile Hut - Mobile Shop | Cart</title>
</head>
<body>
    <!-- ---------------------header and navbar------------------- -->
    <?php
        include './templates/header.php';
    ?>
    <!-- ---------------cart------------------------------  -->
    <div class="cart">
        <div class="container">
            <?php
                $check_cart = "select * from cart where user_id=$uid";
                $result = mysqli_query($conn,$check_cart);

                if(mysqli_num_rows($result) >  0){

            ?>
            <table class="table my-5 table-stripped text-center">
                <tr class="bg-danger shadow text-light">
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    <?php
                        $select_cart="select * from cart where user_id=$uid";
                        $grand_total=0;
                        // $sub_total=0;
                        $result=mysqli_query($conn,$select_cart);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_row($result)){ 
                    ?>
                    <tr>
                        <td valign="middle">
                            <img src="<?=$row[6]?>" class="img-fluid" height="150px" width="150px" alt="...">
                        </td>
                        <td valign="middle">
                            <div class="cart-info text-center">
                                    <h4><?=$row[3]?></h4> 
                            </div>
                        </td>
                        <td valign="middle"><h5><b><?php echo $row[5];?></b></h5></td>
                        <td valign="middle">
                            <form action="update-cart.php" method="POST">
                                <input type="hidden" name="update_qty_id" id="update_qty_id" value="<?php echo $row[0];?>">
                                <input type="number" class="p-1 rounded  w-25" name="update_qty" min="1" id="update_qty" value="<?php echo $row[4];?>">
                                <input type="submit" name="update_qty_btn" class="btn btn-outline-danger" value="Update"/>
                            </form>
                        </td>
                        <td valign="middle"><?php echo $sub_total = $row[5] * $row[4];?></td>
                        <td valign="middle"><button class="btn btn-outline-danger"><a class="text-decoration-none text-dark" href='delete-cart.php?cid=<?php echo $row[0];?>'>Remove</a></button></td>
                        <?php
                            $grand_total+=$sub_total;
                        ?>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="container">
                <div class="d-flex justify-content-between p-5">
                    <h5 class="text-danger"><b>Total: </b></h5>
                    <h5><b><?php echo $grand_total?></b></h5>
                    <!-- inserting to order table -->
                    <?php
                        $cart_query="select * from cart where user_id=$uid";
                        $res=mysqli_query($conn,$cart_query);
                        if(mysqli_num_rows($res)>0){
                            while($cart=mysqli_fetch_row($res)){

                    ?>
                        <form action="add-orders.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $cart[2]?>">
                            <input type="hidden" name="product_name" value="<?php echo $cart[3]?>">
                            <input type="hidden" name="product_price" value="<?php echo $cart[5]?>">
                            <input type="hidden" name="product_qty" value="<?php echo $cart[4]?>">
                            <input type="hidden" name="product_image" value="<?php echo $cart[6]?>">
                    <?php
                        }
                    }
                    ?>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Order Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <h1 class="empty">Your Order Placed Successfully.</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger rounded-pill" data-bs-dismiss="modal">Done</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <input type="submit" class="btn btn-outline-danger rounded-pill shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="purchase" name="purchase">
                        </form>
                </div>
                <?php
                }
                else{
                    ?>
                        <h1 class="empty">CART IS EMPTY ! </h1>
                        <?php
                }
                ?>
                </div>
    </div>

    <!-- ------------footer--------------------------- -->
    <?php
        include './templates/footer.php';
    ?>
</body>
</html>