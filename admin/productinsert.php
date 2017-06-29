<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php  include 'admin_navbar.php'; ?>
        <form action="productinsert1.php" method="post" class="container" enctype="multipart/form-Data">
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Name" name="txtpname" required>
            </div>
        </div>
          <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Price" name="txtpprice" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Manufacturer" name="txtpmanu" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Color" name="txtpcolor" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Image 1:</label>
            </div>
            <div class="form-group col-ld-8">
                <input type="file"  class="form-control" id="text" placeholder="Enter Product Image Path" name="txtpimg1" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Image 2:</label>
            </div>
            <div class="form-group col-ld-8">
                <input type="file"  class="form-control" id="text" placeholder="Enter Product Image Path" name="txtpimg2" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Image 3:</label>
            </div>
            <div class="form-group col-ld-8">
                <input type="file"  class="form-control" id="text" placeholder="Enter Product Image Path" name="txtpimg3" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Warranty" name="txtpwarranty" required>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Stock On Hand" name="txtpsoh" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-4">
                <label for="">Product Detail</label>
            </div>
            <div class="form-group col-ld-8">
                <textarea rows="5" cols="80" name="txtdesc"></textarea>
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
                            echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
                        }
                    }
                ?>
                </select>
            </div>
        <div class="row">
            <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Insert 
            <span class="glyphicon glyphicon-check" ></span>
            </button>
        </div>
    </form>
            
        </form>
    </body>
</html>
