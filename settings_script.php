<?php

require 'includes/common.php';
 if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
$old = md5(mysqli_real_escape_string($con,$_POST['old']));
$new = md5(mysqli_real_escape_string($con,$_POST['new']));
$renew = md5(mysqli_real_escape_string($con,$_POST['renew']));
$check_query = "Select email,password from users where email='".$_SESSION['email']."' and password = '$old' ";
$check_query_result = mysqli_query($con, $check_query) or die(mysqli_query($con));
$rownum = mysqli_num_rows($check_query_result);
if($rownum!=0){
    if(strcmp($new,$renew)==0){
        $update_query = "update users set password = '$new' where email='".$_SESSION['email']."' and password = '$old' ";
        mysqli_query($con, $update_query) or die(mysqli_error($con));
         header('location:settings.php?error=Password Updated');
    }
 else {
    header('location:settings.php?error=Two passwords don\'t match.');    
    }
}
else {
   header('location:settings.php?error=Enter correct old password');
}
?>