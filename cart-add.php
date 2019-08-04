<?php
require 'common.php';
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
//echo "$user_id";
$user_registration_query="insert into users_items(user_id, item_id,status) VALUES('$user_id','$item_id','Added to cart')"
        or die($user_registration_query);
$user_registration_query_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
header ('location: products.php');
?>
