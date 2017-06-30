<!DOCTYPE html>
<html>
    <head>
        <title>Product Update</title>
    </head>
    <body>
        <?php  
            include 'admin_navbar.php'; 
            $conn=new mysqli('localhost','root','','project_db');
            $_pid=$_GET["id"];
            $sql="select * from product_tbl where prod_id=".$_pid;
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
            $_pname=$row["prod_name"];
            $_pcolor=$row["prod_color"];
            $_pprice=$row["prod_price"];
            $_pmanu=$row["prod_mfg"];
            $_pwarra=$row["prod_warranty"];
            $_psoh=$row["prod_soh"];
            $_pimg1=$row["prod_img1"];
            $_pimg2=$row["prod_img2"];
            $_pimg3=$row["prod_img3"];
            $_pdesc=$row["prod_desc"];
            $_fk_cat_id=$row["fk_cat_id"];
        ?>
        <form action="produpdatecode.php?pro_id=<?php echo $_pid; ?>&img1=<?php echo $_pimg1; ?>&img2=<?php echo $_pimg2; ?>&img3=<?php echo $_pimg3; ?>" method="post" class="container" enctype="multipart/form-Data">
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pname; ?>"  class="form-control" id="text" placeholder="Enter Product Name" name="txtpname" required>
            </div>
        </div>
          <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Price" value="<?php echo $_pprice;  ?>" name="txtpprice" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Manufacturer" value="<?php echo $_pmanu; ?>" name="txtpmanu" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Color" value="<?php echo $_pcolor; ?>" name="txtpcolor" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Image 1:</label>
                <img src="<?php echo $_pimg1; ?>" height="150px" width="150px"/>
            </div>
            <div class="form-group col-ld-8">  
            <input type="file"  class="form-control"  name="txtpimg1" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Image 2:</label>
                <img src="<?php echo $_pimg2; ?>" height="150px" width="150px"/>
            </div>
            <div class="form-group col-ld-8">
                <input type="file"  class="form-control" id="text" placeholder="Enter Product Image Path" name="txtpimg2" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Image 3:</label>
                <img src="<?php echo $_pimg3; ?>" height="150px" width="150px"/>
            </div>
            <div class="form-group col-ld-8">
                <input type="file"  class="form-control" id="text" placeholder="Enter Product Image Path" name="txtpimg3" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Warranty" value="<?php echo $_pwarra; ?>" name="txtpwarranty" required>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Stock On Hand" value="<?php echo $_psoh; ?>" name="txtpsoh" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Product Detail</label>
            </div>
            <div class="form-group col-ld-8">
                <textarea rows="5" cols="80" value="" name="txtdesc"><?php echo $_pdesc; ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <select name="fk_cat_id" class="form-control">
                <?php
                    $conn=new mysqli('localhost','root','','project_db');
                    $sql="select * from cat_tbl";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo '<option value="'.$row["pk_cat_id"].'"  echo ("'.$row["fk_cat_id"].'" == "'.$_fk_cat_id.'" ? selected="selected": "");>'.$row["cat_name"].'</option>';
                        }
                    }
                ?>
                </select>
            </div>
        <div class="row">
            <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Update 
            <span class="glyphicon glyphicon-check" ></span>
            </button>
        </div>
    </form>
    </body>
</html>
