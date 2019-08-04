<?php
require "common.php";
$con= mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));

$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
$password=md5($pass);
$get_values = "SELECT id,email FROM users WHERE email='$email' AND PASSWORD='$password'";
$get_values_result = mysqli_query($con,$get_values);
//if(get_values_result)
{
$total_rows_fetched = mysqli_num_rows($get_values_result);
if($total_rows_fetched==0)
{
    //echo 'Enter correct email or password!';
    header('location: login.php?error=Wrong Old Password.');
    echo 'Enter correct email or password!';
    
    
   
}
 else { 
     $roo=mysqli_fetch_array($get_values_result);
     $_SESSION['email']=$email;
     $_SESSION['id']=$roo['id'];
     header('location:products.php');
    
     
    
} }
?>

