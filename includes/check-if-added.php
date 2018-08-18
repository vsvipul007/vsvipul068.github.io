<?php

function check_if_added_to_cart($item_id){
  
  $user_id=$_SESSION['user_id'];
  require "includes/common.php";
  $check_query="SELECT * from users_items where item_id='$item_id' and user_id='$user_id' and status ='Added to Cart'";
  $check_query_result = mysqli_query($con, $check_query);
  $row_numbers = mysqli_num_rows($check_query_result);
  if($row_numbers >= 1) {
      return 1;
  }
  else{
      return 0;
  }
}
?>
