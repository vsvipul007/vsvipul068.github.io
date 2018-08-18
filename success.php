<?php 
    require "includes/common.php";
    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
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
    ?>
        <!--header ends--> 
        <div id="content" class="container">
            <?php
            $item_id_string = $_GET['items_id'];
            $user_id=$_SESSION['user_id'];
            $update_query = "update users_items set status = 'Confirmed' where item_id IN ('$item_id_string') and $user_id='$user_id'";
            mysqli_query($con, $update_query) or die(mysqli_error($con));
            
            ?>
            
            <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <center>
                    <h3>  Your order is confirmed. Thank you for shopping
                        with us. </h3><hr><p><a href="products.php">Click here</a> to purchase any other item.</p>
                        </center>
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
