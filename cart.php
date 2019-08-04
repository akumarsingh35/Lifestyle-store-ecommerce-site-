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
</head>
    <body>
        <?php
        include 'header.php';
        ?><br><br><br>
         <div class="container">
            <div class="table-responsive">
               <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <table class="table table-striped">
                        <tbody class="center"><br><br><br>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th> </th>
                                   
                                </tr>
                                <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <?php
{

$sum=0;
$u_id=$_SESSION['id'];
$save="select items.price AS Price,items.name AS Name,items.id from users_items join items on users_items.item_id=items.id where users_items.user_id=$u_id and status='Added to cart'";
$get=  mysqli_query($con,$save) or die(mysqli_error($con));
$show=  mysqli_num_rows($get);
}
?>
<tbody>
<?php
{
if($show==0)
{
    echo"You have added nothing in the cart";
}
else
{
   while($put=  mysqli_fetch_array($get))
   {
       $sum=$sum+$put['Price'];
       $id="";
       $id=$put["id"];
      echo "<tr>
          <td>".$put['id']."</td>
              <td>".$put['Name']."</td>
                  <td>".$put['Price']."</td>
                     <td><a href='cart-remove.php?id1={$put['id']}' class='remove_item_link btn btn-block btn-danger'>Remove</a></td>
                      </tr>";
   }
   echo "<tr>
       <td>Total Price</td>
       <td>Rs: ".$sum;"<br></td>
           <td> </td>
           <td> </td>
        <tr>";
       echo "<tr>     
       <td><center><a href='Success.php?itemid=$id' class='btn btn-block btn-success'>Buy Now</a><center></td>
       <tr>";
}
}
   ?>
</tbody>      
</tr><br><br>
</tbody>
</table>
</div>
</div>
</div>
</div>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>
<br><br>
<div class="row align-items-center">
		<nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container"><div class="col-xs-offset-3"><p style="color:#B0AFAF;padding-top:10px;">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p></div></div>
    </nav></div>
</body>
</html>