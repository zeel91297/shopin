<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<body>

	<?php
include 'user_navbar.php';
?>

<!--header-->
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<em></em>
		<h2><a href="../visiter/home.php">Home</a><label>/</label>Products</h2>
	</div>
</div>

	<!--content-->
    <?php
          $conn=new mysqli("localhost","root","","project_db");
    if($conn->connect_error)
    {
            echo "connection error";
    }
    $result=$conn->query("select * from product_tbl");

    ?>
	<div class="product">
		<div class="container">
			<div class="col-md-9">
				<?php
				
					while($row=$result->fetch_assoc())
					{
				
				echo '<div class="mid-popular">';
					echo '<div class="col-md-4 item-grid1 simpleCart_shelfItem">';
					echo '<div class=" mid-pop">';
					echo '<div class="pro-img">';
						echo '<img src="'.$row["prod_img1"].'" class="img-responsive" alt="">';
						echo '<div class="zoom-icon ">';
						echo '<a class="picture" href="'.$row["prod_img1"].'" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>';
						
						echo '<a href="viewdetail.php?pro_id='.$row["prod_id"].'"><i class="glyphicon glyphicon-menu-right icon"></i></a>';
						echo '</div>';
						echo '</div>';
						echo '<div class="mid-1">';
						echo '<div class="women">';
						echo '<div class="women-top">';
							echo '<span>Women</span>';
							echo '<h6><a href="viewdetail.php?pro_id='.$row["prod_id"].'">'.$row["prod_name"].'</a></h6>';
							echo '</div>';
							echo '<div class="img item_add">';
								echo '<a href="#"><img src="../images/ca.png" alt=""></a>';
							echo '</div>';
							echo '<div class="clearfix"></div>';
							echo '</div>';
							echo '<div class="mid-2">';
								echo '<p ><label>$100.00</label><em class="item_price">'.$row["prod_price"].'</em></p>';
								  echo '<div class="block">';
									echo '<div class="starbox small ghosting"> </div>';
								echo '</div>';
								
								echo '<div class="clearfix"></div>';
							echo '</div>';
							
						echo '</div>';
					
					echo'</div>';
							echo'</div>';
				
					}
						?>
			    </div>
            </div>
</div>
					
</div>			
</div>

				<!--products-->
			
			<!--//products-->
<div class="col-md-3">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Categories</h4>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Women </a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Kids</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails</a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Accessories</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails</a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Shoes</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
					 <!---->
						

</div>
	</div>


	<!--//content-->
		<!--//footer-->
	<?php
	
	include 'footer.php';
	
	?>

		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="../js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="../js/bootstrap.min.js"></script>
 <!--light-box-files -->
		<script src="../js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="../js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</body>
</html>