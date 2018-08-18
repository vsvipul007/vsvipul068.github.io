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
        <title>Settings</title>
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
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h2>Change Password</h2>
                <form action = "settings_script.php" method="POST">
                    
                    <div class="form-group">
                        <input type="password" placeholder="Old Password" name ="old" class="form-control" required="true" pattern = ".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="New Password" name ="new" class="form-control" required = "true" pattern = ".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Re-type New Password" name = "renew" class="form-control" required ="true" pattern = ".{6,}">
                    </div>
                    <button type="sumbit" class="btn btn-primary">Change</button>
                    <br><br>     
                      <?php if(isset($_GET['error'])){echo $_GET['error'];} ?>
                </form>
            </div>
        </div>
        </div>
                    <!--footer part-->
   <?php
       include "includes/footer.php";
   ?>
    </body>
</html>
