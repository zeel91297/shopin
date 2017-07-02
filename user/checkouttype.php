<html>
<body>

<?php

include 'user_navbar.php';
$id=$_SESSION["userid"];
$_prodid=$_GET["prod_id"];
$_prodprice=$_GET["prod_price"];
?>

<div class="banner-top">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
		<h2><a href="../visiter/home.php">Home</a><label>/</label>Checkout</h2>
	</div>
</div>
<div class="check-out">
<div class="login">
<<<<<<< HEAD
<form class="container " method="post" action="checkcode.php">
    <div class="row form-group login-mail">
        <h2><label for="">Payment Method:</label><br><br>    </h2>
        <h3><input type="radio" name="paytype"  value="cod" selected>Cash On Delievery
=======
<form class="container " method="post" action="<?php echo 'bill.php?prod_id='.$_prodid.'&prod_price='.$_prodprice; ?>" >
    <div class="row form-group login-mail">
        <h2><label for="">Payment Method:</label><br><br>    </h2>
        <h3><input type="radio" name="paytype"  value="cod" checked>Cash On Delievery
>>>>>>> b9b1e9193e745709e50eb391c4533e96173fadf9
        <input type="radio" name="paytype"  value="debit">Online Payment</h3>
    </div>
    <?php
        require '../shared/database_user.php';
        $obj=new userdb();
        $result=$obj->userdetail($id);
        $row=$result->fetch_assoc();
    ?>
    <div class="login-mail" border=0>
        <h2><label for="">Shipping Address:</label></h2><br>
        <textarea rows="7" cols="86" name="txtadd"><?php echo $row["address"]; ?></textarea>
        <i class="glyphicon glyphicon-home"></i>
    </div>

<<<<<<< HEAD
    <?php
        echo '<a href="bill.php?pro_id='.$_prodid.'&prod_price='.$_prodprice.'" role="button" class="btn btn-danger">Proceed to Place Order</a>';
    ?>
=======
    <button type="submit class="btn btn-danger">Proceed to Place Order</button>

>>>>>>> b9b1e9193e745709e50eb391c4533e96173fadf9
</form>
</div>
</div>

</body>
</html>