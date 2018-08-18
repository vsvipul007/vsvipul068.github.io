<?php
require "includes/common.php";
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5($_POST['password']);
$query = "Select id,email from users where email='$email' AND password='$password'";
$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
$total_rows = mysqli_num_rows($query_result);
if($total_rows==0){
    header('location:login.php?error=Invalid Email or Password');
    }
else{
    $fetched_data = mysqli_fetch_array($query_result); 
    $_SESSION['email']=$fetched_data['email'];
    $_SESSION['user_id']=$fetched_data['id'];
    header('location:products.php');
}
