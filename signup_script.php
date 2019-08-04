<?php
require 'common.php';

$first_name=$_POST['firstname'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=$_POST['password'];
$password=md5($pass);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$get_values = "SELECT id,email FROM users WHERE email='$email'";
$get_values_result = mysqli_query($con,$get_values);
$total_rows_fetched = mysqli_num_rows($get_values_result);
if($total_rows_fetched==1)
{
    
    echo "Email already exists";
    
   
}
 else {
    
$user_registration_query="insert into users(name,email,password,contact,city,address) values('$first_name','$email','$password','$contact','$city','$address')"
or die($user_registration_query);
$user_registration_query_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
$_SESSION['email']=$email;
$ah = "SELECT id FROM users WHERE email='$email'";
$get_ah = mysqli_query($con,$ah);
$total_ah = mysqli_num_rows($get_ah);
     $_SESSION['id']=$total_ah['id'];
header('location: logout.php');
     
 }
?>
