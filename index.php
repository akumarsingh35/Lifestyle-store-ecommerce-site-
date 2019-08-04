<?php
require "common.php";
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
        <title>Lifestyle Store</title>
		<style>
		.banner_image{
		padding-top:75px;
		padding-bottom:50px;
		text-align:center;
		color:#f8f8f8;
		background:url(img/intro-bg_1.jpg) no-repeat center center;
		background-size:cover;
		width:100%;
		}
		.banner_content { position: relative;
		padding-top:5%;
		padding-bottom:5%;
		margin-top:12%;
		margin-bottom:12%;
		margin-left:25%;
		margin-right:25%;
		background-color:rgba(0,0,0,0.7);
		max-width:cover;}
		.asl{
		margin-bottom:0%;}</style>
    </head>
    <body>
	<div class="row"> <?php
       include 'header.php';
        ?>
	</div><div class="row">
	<div class="container-fluid">
	<div class="banner_image">
	<div class="banner_content">
	<h1 style="font-family:serif;font-weight:bold;">We sell lifestyle.</h1>
     <p style="font-size:11.5px; font-family:verdana;">Flat 40% OFF on premium brands<p><br>
	 <a href="products.php" class="btn btn-danger">Shop Now</a>
	</div>
	</div>
   	</div></div>
	<?php
        include 'footer.php';
        ?>
	
	
	
	
	
	
	
	
	</body>
</html>
