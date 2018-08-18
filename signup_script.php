<?php
require "includes/common.php";
$name= mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password= md5($_POST['password']);
$contact= $_POST['contact'];
$city= mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=Enter correct email');
}
if (strlen($_POST['password']) < 6) {
  header('location: signup.php?password_error=Enter correct password');
}
$check_query = "Select id from users where email = '$email'";
$check_query_result = mysqli_query($con,$check_query)or die($mysqli_error($con));
$rowno = mysqli_num_rows($check_query_result);
if($rowno >0){
    header('signup.php?exist_error=Email Id already exists');
}
else{
    $insert_query="INSERT into users(name,email,password,contact,city,address) VALUES('$name','$email','$password','$contact','$city','$address')";
    $insert_query_execute = mysqli_query($con, $insert_query)or die($mysqli_error($con));
    $id= mysqli_insert_id($con);
    $_SESSION['email']=$email;
$_SESSION['user_id']=$id;
header('location:products.php');
}
        ?>