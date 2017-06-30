<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
    <?php
        include 'admin_navbar.php';
        $_catid=$_GET["id"];
        $conn=new mysqli('localhost','root','','project_db');
        $sql="select * from cat_tbl where pk_cat_id=".$_catid;
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    ?>
    <form action="catupdatecode.php?id=<?php echo $_catid; ?>" method="post" class="container" enctype="multipart/form-Data">
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $row["cat_name"]; ?>" class="form-control" id="text" placeholder="Enter Category Name" name="txtcname" required>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Update 
            <span class="glyphicon glyphicon-check" ></span>
            </button>
        </div>
    </form>
    </body>
</html>