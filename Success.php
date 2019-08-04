<?php
require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Success</title>
    </head>
    <body>
	<?php
        include 'header.php';
        ?>
        <?php
        
        $user_id = $_SESSION['id'];
        $item_id= $_GET['itemid'];
         $sql = "UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' AND item_id='$item_id'";
        $mysqli_result= mysqli_query($con,$sql);
        ?>
        <br><br><br><br>
	  <div class="container">
	  <div class="alert alert-success">
	  <strong>Success! </strong>Your order is confirmed. Thank you for shopping with us.<br><a href="products.php">Click here</a> to purchase any other item.
	  </div></div>
	  
	  
	  
	  
	  	  <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container"><div class="col-xs-offset-3"><p class="navbar-text">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p></div></div>
    </nav></div>
	  
    </body>
</html>