<?php
require 'common.php';
if (isset($_SESSION['email'])){
    header('location: products.php');
}
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
        <title>Signup</title>
    </head>
    <body>
	<div class="row"> <?php
       include 'header.php';
       ?><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4> SIGN UP </h4></div>
                    <form method="POST" action="signup_script.php">  
                        <div class="panel-body">
					    <div class="form-group">
                        <input type="text"  class="form-control" name="firstname" placeholder="First name"></div>
						<div class="form-group">
                        <input type="text"  class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></div>
						<div class="form-group">
                        <input type="password"  class="form-control" name="password" placeholder="password" pattern=".{6,}"></div>
						<div class="form-group">
                        <input type="tel"  class="form-control" name="contact" placeholder="Contact" pattern=".{10,}" ></div>
						<div class="form-group">
                        <input type="text"  class="form-control" name="city" placeholder="City"></div>
						<div class="form-group">
                        <input type="text"  class="form-control" name="address" placeholder="Address"></div>
						<div class="form-group">
						<button class="btn btn-primary btn-block">Submit</button></div>
                    </form></div>
                    </div>  </div>      
            </div>
            <br><br><br><br>
        </div><br><br>
			<div class="row"> <?php
       include 'footer.php';
        ?></body>
</html>

