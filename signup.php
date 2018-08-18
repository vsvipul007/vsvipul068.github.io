<?php 
require "includes/common.php";
if(isset($_SESSION['email'])){
    header('location:products.php');
}
?><!DOCTYPE html>
<html>
    <head>
        <title>Signup | Life Style Store</title>
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
            <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                <h2> SIGN UP</h2>
        <form action="signup_script.php" method="POST">       
            <div class="form-group">
                <input type="text" placeholder="Name" name="name" class="form-control" required pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
          <div class="form-group">
              <input type="email" placeholder="Email" name="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          <?php if(isset($_GET['email_error'])){ echo $_GET['email_error'];}?>  
          </div>  
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" class="form-control" required pattern=".{6,}">
            </div>
            <?php if(isset($_GET['password_error'])){ echo $_GET['password_error'];} ?>
          <div class="form-group">
                <input type="text" placeholder="Contact" size="10" name="contact" class="form-control" required>
                
                <?php
                if(isset($_GET['exist_error'])){ echo $_GET['exist_error'];}
                ?>
          </div>
              <div class="form-group">
                <input type="text" placeholder="City" name="city" class="form-control" required>
            </div>
              <div class="form-group">
                <input type="text" placeholder="Address" name="address" class="form-control" required>
            </div>
            <button type="submit" name ="button" class="btn btn-primary input-lg">Submit</button>
        </form>
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
