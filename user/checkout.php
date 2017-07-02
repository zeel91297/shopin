<html>
<body>

<?php

include 'user_navbar.php';
$id=$_SESSION["userid"];
?>

<div class="banner-top">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
		<h2><a href="../visiter/home.php">Home</a><label>/</label>Checkout</h2>
	</div>
</div>
	<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>

<div class="check-out">
<div class="container">

<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
		  <tr>
			<th class="table-grid">Item</th>
			<th>Quantity</th>		
			<th>Prices</th>
			<th>Delivery </th>
			<th>Subtotal</th>
			<th>Action</th>

		  </tr>
		  <?php
		  require '../shared/cart_class.php';
		  $obj=new cart();
		  $res=$obj->display1();
		  while($row=$res->fetch_assoc())
		  {
		  	echo '<tr class="cart-header">';
			 echo '<td class="ring-in"><a href="prod.php" class="at-in"><img src="'.$row["prod_img1"].'" class="img-responsive" alt=""></a>';
			echo '<div class="sed">';
				echo '<h5><a href="prod.php">'.$row["prod_name"].'</a></h5>';
				echo '<p>'.$row["prod_desc"].'</p>';
			
			echo '</div>';
			echo '<div class="clearfix"> </div>';
			echo '<td>'.$row["cart_qty"].'</td>';
			echo '<td>'.$row["prod_price"].'</td>';
			echo '<td>FREE SHIPPING</td>';
			echo '<td class="item_price">'.$row["prod_price"].'</td>';
			 echo '<td> <a href="delete.php?cart_id='.$row["cart_id"].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp | &nbsp<a href="cart_update.php?cart_id='.$row["cart_id"].'"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a></td>';
			//<td class="add-check"><a class="item_add hvr-skew-backward" href="#">Add To Cart</a></td>
		  echo '</tr>';
		  } 
			 ?>
          </table>
    </div>
</div>
<div class="produced">
	<a href="single.html" class="hvr-skew-backward">Produced To Buy</a>
	 </div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>