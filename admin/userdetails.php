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
        $_mailid=$_GET["id"];
        require '../shared/database_user.php';
        $obj=new userdb();
        $result=$obj->userdetail($_mailid);
        $row=$result->fetch_assoc();
    ?>
        <form action="" method="post" class="container">
<!--<div class="row">
<img src="" alt="" class="img-responsive img-thumbnail">
</div>-->
<div class="row">
  <div class="col-ld-3 col-sm-4">
    <a href="#" class="thumbnail">
      <img src="<?php echo $row["profile_pic"]; ?>" alt="..." class="img-responsive img-circle">
    </a>
  </div>
  <div class="col-ld-9 col-sm-8 ">
  <?php
    echo "<h3><label>Email ID:   ".$row["pk_email_id"]."</label><br><br>";
    echo "<label>User Name:  ".$row["uname"]."</label><br><br>";
    echo "<label>Mobile NO:  ".$row["mobile_no"]."</label><br><br>";
    echo "<label>Gender:     ".$row["gender"]."</label><br><br>";
    echo "<label>Address:    ".$row["address"]."</label><br><br>";
    echo "<label>User Type:  ".$row["user_type"]."</label><br></h3><br>";
  ?> 
 
        <?php
        if(isset($_POST["btnedit"])){
            header('location:userupdate.php');
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