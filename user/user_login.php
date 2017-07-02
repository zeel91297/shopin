<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
</head>
<?php
	require 'user_navbar.php';
    ?>
<body>
<form action="user_login_code.php" method="post">
<!--header-->
			
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Login</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Login</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
		
			
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" name="txtmail" placeholder="Email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="txtpass" placeholder="Password" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   
				<label class="hvr-skew-backward">
					<input type="submit" value="login" name="btnsub">
				</label>
				<a href="" data-toggle="modal" data-target="#myModal">
Forgot Passowrd</a>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Forgot Paaword</h4>
      </div>
      <div class="modal-body">
        <input type="text" name="txtfor" class="form-control" placeholder="Enter Useid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="btnfor" class="btn btn-primary">Send Password To Mail</button>
      </div>
    </div>
  </div>
</div>

			</div>
			<div class="col-md-6 login-right">
				 <h3>Completely Free Account</h3>
				 
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				<a href="register.html" class=" hvr-skew-backward">Register</a>

			</div>
			
			<div class="clearfix"> </div>
			
		</div>

</div>

<!--//login-->
	<?php
		include 'footer.php';
	?>
			<!--//footer-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="../js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="../js/bootstrap.min.js"></script>
 </form>
</body>
</html>