<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        include 'admin_navbar.php';
        $_prodid=$_GET["id"];
        require '../shared/databaseproduct.php';
        $obj=new productdb();
        $result=$obj->productdetail($_prodid);
        $row=$result->fetch_assoc();
    ?>
        <form action="" method="post" class="container">
<!--<div class="row">
<img src="" alt="" class="img-responsive img-thumbnail">
</div>-->
<div class="row">
  <div class="col-ld-8 col-sm-8">
        <img src="<?php echo $row["prod_img1"]; ?>" alt="..." class="img-responsive img-circle">
    <div class="row thumbnail">
        <img src="<?php echo $row["prod_img2"]; ?>" alt="..." class="img-responsive img-circle col-ld-4 col-sm-4">
      <img src="<?php echo $row["prod_img3"]; ?>" alt="..." class="img-responsive img-circle col-ld-4 col-sm-4">
    </div>
      
      
  </div>
  <div class="col-ld-4 col-sm-4">
  <?php
    echo "<h3><label>Product ID:           ".$row["prod_id"]."</label><br><br>";
    echo "<label>Product Name:             ".$row["prod_name"]."</label><br><br>";
    echo "<label>Product Price:            ".$row["prod_price"]."</label><br><br>";
    echo "<label>Product Manufacturer:     ".$row["prod_mfg"]."</label><br><br>";
    echo "<label>Product Color:            ".$row["prod_color"]."</label><br><br>";
    echo "<label>Product Warranty:         ".$row["prod_warranty"]."</label><br><br>";
    echo "<label>Product Stock On Hand     ".$row["prod_soh"]."</label><br><br>";
    echo "<label>Product Description:      ".$row["prod_desc"]."</label><br><br>";
    echo "<label>Product Category:         ".$row["cat_name"]."</label><br><br></h3>";
  ?> 
 
        <?php
        if(isset($_POST["btnedit"])){
            header('location:productupdate.php');
        }
        ?>
        <div class="row">
            <button type="submit" name="btnedit" class="form-control btn btn-info" aria-label="Left Align"> Edit Profile 
            <span class="glyphicon glyphicon-pencil" ></span>
            </button>
        </div>
         </div>
</div>    
</form>

    </body>
</html>