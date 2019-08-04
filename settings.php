<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Setting</title>
   </head>
    <body>
        <?php include 'header.php'; ?>
        <br><br><br><br><br><br><br>

        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Change Password</h4></div>
                    <form action="setting_script.php" method="POST">
                        <div class="panel-body">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" pattern=".{6,}" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password"  pattern=".{6,}" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
                        </div>
                        <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                      <button type="submit" class="btn btn-primary">Change</button></div>

                    </form>
                    </div></div>
            </div>
        </div>
        <br><br>
           <div class="row align-items-center">
		<nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container"><div class="col-xs-offset-3"><p style="color:#B0AFAF;padding-top:10px;">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p></div></div>
    </nav></div>
    </body>
</html>