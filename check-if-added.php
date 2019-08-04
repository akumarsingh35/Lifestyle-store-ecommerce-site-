<?php
function check_if_added_to_cart($item_id)
{
    
  include 'common.php';
    $con= mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
    
 $user_id = $_SESSION['id'];
$get="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id='$user_id' AND
         status='Added to cart'" ;
$mysqli_result= mysqli_query($con,$get);
if ($mysqli_result)
{
if(mysqli_num_rows($mysqli_result)>=1)
{
    return 1;
}
 else {
  return 0;   
 }
    
}

} ?>