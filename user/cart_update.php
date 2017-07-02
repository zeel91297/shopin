<html>
<?php
include 'user_navbar.php';
?>

 <body class="container">
    <div class="jumbotron">
  <h1><center>Update</center></h1>
    </div>

    <?php
    $_id="";
    $_qty="";
     $_cart_id=$_GET["cart_id"];
     $conn=new mysqli('localhost','root','','project_db');
     $result=$conn->query("select * from cart_tbl where cart_id=".$_cart_id);
     $row=$result->fetch_assoc();
    $_qty=$row["cart_qty"];
     ?>
    <div class="container">
    <form method="post"  action="cart_update1.php?id=<?php echo $_cart_id?>" class="form-group">
   <!-- <input type="text" name="txtid" placeholder="Enter Id" class="form-control" readonly value="<?php echo "$_id"; ?>"><br>-->
    <lable><b> Qty</b></lable>
    <input type="text" name="txtqty" placeholder="Enter quantity" class="form-control" value="<?php echo "$_qty"; ?>"><br>
     <center><input type="submit" class="btn btn-info" name="btnupdate" value="update">
    </form>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>