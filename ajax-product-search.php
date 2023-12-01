<?php
require 'config.php';
if(isset($_POST['search'])){
    $search=$_POST['search'];
    $select = "select * from product where item LIKE '%$search%'";
}
else{
    $select = "select * from product";
}
$res=mysqli_query($conn,$select);
$output="";
if(mysqli_num_rows($res) > 0){
    while($row=mysqli_fetch_row($res)){
        $output.='<div class="col-lg-3 col-sm-12">
        <div class="card my-3">
            <form action="" method="post">

                <div class="card-img my-4 p-img d-flex flex-column align-items-center">
                    <img src="'.$row[4].'" class="img-fluid product-img"  alt="">
                </div>
            <div class="card-body bg-light text-dark">
                <h5 class="card-title">'.$row[1].'</h5>
                <p class="card-text">Price : '.$row[2].'</p>
                <p class="card-text">Details : '.$row[3].'</p>
                <p class="card-text rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <input type="hidden" name="pid" value="'. $row[0].'">
                <input type="hidden" name="cart_item" value="'. $row[1].'">
                <input type="hidden" name="cart_price" value="'. $row[2].'">
                <input type="hidden" name="cart_image" value="'. $row[4].'">

                <input type="submit" class="btn btn-outline-danger rounded-pill" name="add_to_cart" value="Add to Cart">
                    <i class="fa fa-cart-shopping text-danger"></i>
                </input>
            </div>
            </form>
        </div>
    </div>';
    }
    echo $output;
}
else{
    echo "<h1 class='empty'>No Product Found  !</h1>";
}

?>