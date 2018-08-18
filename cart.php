<?php
require "includes/common.php";
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Cart</title>
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
        <div class="row decor-bg">
            <div class="col-md-6 col-md-offset-3">
        <table class="table table-striped">
        <?php
        $user_id = $_SESSION['user_id'];
        $item_query = "SELECT item_id,name,price from items INNER JOIN users_items where users_items.item_id=items.id and users_items.user_id='$user_id' and status = 'Added to Cart'";
        $item_query_result = mysqli_query($con, $item_query) or die(mysqli_error($con));
        $row_num = mysqli_num_rows($item_query_result); 
        if($row_num>=1){
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th> Item Name</th>
                    <th> Price </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
              $sum =0;
          while($rows = mysqli_fetch_array($item_query_result))
             {
             $sum = $sum + $rows['price'];
             $id = ($rows['item_id']). ",";
        echo "<tr><td>".$rows['item_id']."</td><td>" .$rows['name']. "</td><td>Rs." .$rows['price']."</td><td><a href='cart-remove.php?id={$rows['item_id']}' class='remove_item_link'>Remove</a></td></tr>" ;
             }                     
                   $id = rtrim($id, ", "); //right s comma hatane ke liye 
                   echo "<tr><td></td><td>Total</td><td>Rs ".$sum."</td><td><a href ='success.php?items_id=". $id ."' class='btn btn-primary'>Confirm Order</a></td></tr>";
                   ?>
            </tbody>
             <?php
                      }  else {
                            echo "Add items to the cart first!";
                        }
                        ?>
        </table>
        </div>
    </div>
        </div>
        
          <!--footer part-->
   <?php
       include "includes/footer.php";
   ?>
    </body>
</html>
