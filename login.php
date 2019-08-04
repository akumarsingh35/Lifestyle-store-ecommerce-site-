<?php
require "common.php";
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
        <title>Login</title>
    </head>
    <body>
        
	<div class="row"> <?php
       include 'header.php';
       ?><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
							<form method="POST" action="login_submit.php">
							<div class="form-group">
							<input type="text"  class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></div>
						<div class="form-group">
                        <input type="password"  class="form-control" name="password" placeholder="password" pattern=".{6,}"></div>
						<div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div></form>
                        <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
       <?php
        include 'footer.php';
        ?>
    </body>
</html>

