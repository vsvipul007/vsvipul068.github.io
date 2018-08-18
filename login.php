<?php 
require "includes/common.php";
if(isset($_SESSION['email'])){
    header('location:products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login | Life Style Store</title>
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
        <div id="content">
       <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3> Login Here</h3>
            </div>
            <div class="panel-body">
                <p class="text-warning">Login to make a purchase.</p>
                <form action="login_submit.php" method="POST">
                    <div class="form-group">
                        <input type="email" placeholder="Enter your email here" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password here" name="password" class="form-control" pattern=".{6,}" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Login</button>
                      <div> <?php if(isset($_GET['error'])){echo $_GET['error']; }
                                     ?></div>
                </form>
            </div>
            <div class="panel-footer">
                <p>Don't have an account? <a href="signup.php">Register</a></p>
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
