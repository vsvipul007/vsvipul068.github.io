<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src ="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
       <!--header-->
    <?php 
    include "includes/header.php";
    include "includes/check-if-added.php";
    ?>
        <!--header ends-->
        <div class="container" id="content">
                <div class="container">
                <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                 </div>
                    <hr>
                 </div>
            
        <div class="container">
            <div class="row text-center" id="cameras">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/5.jpg" class="img-responsive" alt="Canon EOS">
                        <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price : Rs 36000.00</p>
                        <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(1))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/2.jpg" class="img-responsive" alt="Sony DSLR1">
                    <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price : Rs 40000.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(2))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/3.jpg" class="img-responsive"  alt="Sony DSLR2">
                    <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price:Rs 50000.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(3))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/4.jpg" class="img-responsive" alt="Olympus DSLR">
                    <div class="caption">
                    <h3>Olympus DSLR</h3>
                    <p>Price:Rs 80000.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(4))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="watches">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/18.jpg" class="img-responsive" alt="Titan Model#301">
                    <div class="caption">
                    <h3>Titan Model#301</h3>
                    <p>Price : Rs 13000.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(5))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/19.jpg" class="img-responsive" alt="Titan Model#201">
                    <div class="caption">
                    <h3>Titan Model#201</h3>
                    <p>Price : Rs 3000.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(6))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/20.jpg" class="img-responsive"  alt="HMT Milan">
                    <div class="caption">
                    <h3>HMT Milan</h3>
                    <p>Price:Rs 8000.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(7))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/21.jpg" class="img-responsive" alt="Faber Luba#111">
                    <div class="caption">
                    <h3>Faber Luba#111</h3>
                    <p>Price:Rs 18000.00</p>
                   <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(8))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="shirts">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/22.jpg" class="img-responsive" alt="H&W">
                    <div class="caption">
                    <h3>H&W</h3>
                    <p>Price : Rs 800.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(9))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/23.jpg" class="img-responsive" alt="Luis Phil">
                    <div class="caption">
                    <h3>Luis Phil</h3>
                    <p>Price : Rs 1000.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(10))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/24.jpg" class="img-responsive"  alt="John Zok">
                    <div class="caption">
                    <h3>John Zok</h3>
                    <p>Price:Rs 1500.00</p>
                    <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(11))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src ="img/25.jpg" class="img-responsive" alt="Jhal Sani">
                    <div class="caption">
                    <h3>Jhal Sani</h3>
                    <p>Price:Rs 1300.00</p>
                   <?php 
                        if(!isset($_SESSION['email'])){
                            ?>
                        <p> <a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                        <?php } else
                        {
                            if(check_if_added_to_cart(12))
                            {
                            echo '<a href="#" class= "btn btn-success" disabled>Added to Cart</a>';
                            }
                            else
                                {
                        ?> 
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                        <?php   
                        }
                        }
                        ?>
                        
                    </div>
                    </div>
                </div>
            </div>
           
        </div>
           
        </div>
                  <!--footer part-->
   <?php
       include "includes/footer.php";
   ?>
    </body>
</html>
