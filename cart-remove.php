<?php
include 'common.php';
$user_id=$_SESSION['id'];
$item_id=$_GET['id1'];
$sql="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
$mysqli_result= mysqli_query($con,$sql);
header ('location: cart.php');
?>
