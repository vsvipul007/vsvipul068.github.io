<?php
require "includes/common.php";
if(isset($_SESSION['email']))
{
    header('location:products.php');
}
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src ="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body style="padding-top: 50px;">
        <!--header-->
    <?php 
    include "includes/header.php";
    ?>
        <!--header ends-->
        <!--content-->
        <div id="content">
        <div id="banner_image">
            <div class="container">
                    <center>
                    <div class="banner-content">
                        <h1>We Sell Lifestyle</h1>
                        <p>Flat 40% off on premium brands</p>
                        <br>
                        <a href ="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                    </center>    
            </div>
        </div>
             <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
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
