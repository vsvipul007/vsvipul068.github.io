<?php
require 'includes/common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
$itemid = $_GET['id'];
$user_id = $_SESSION['user_id'];
$delete_query = "Delete from users_items where user_id ='$user_id' and item_id ='$itemid'";
$delete_query_result = mysqli_query($con,$delete_query) or die(mysqli_error($con));
header('location:cart.php');
}
?>

