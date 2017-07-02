<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
        <?php
            if(isset($_POST["btnInsert"])){
                    header('location:productinsert.php');
                } 
            include 'admin_navbar.php';
            require '../shared/databaseproduct.php';
            $obj=new productdb();
            $result=$obj->productdisplay();
        ?>
        <div class="table-responsive container">
        <!--<a href="productinsert.php" class="btn btn-primary" role="button">Insert A Record</a>-->
        <form method="post" action="deleteallpro.php">
            <table class="table table-hover">
                <thead>
                    <th>Delete</th>
                    <th>Product Name</th>
                    <th>Product Manufacturer</th>
                    <th>Product Stock On Hand</th>
                    <th>Product Image</th>
                    <th>Product Category</th>
                    <th>Action</th>
                </thead>
                <?php
                    while($row=$result->fetch_assoc())
                    {
                        echo '<b><tr class="active">';
                        echo '<td><input type="checkbox" name="chk[]" value="'.$row["prod_id"].'"></td>';
                        echo '<td>'.$row["prod_name"] .'</td>';
                        echo '<td>'.$row["prod_mfg"] .'</td>';
                        echo '<td>'.$row["prod_soh"] .'</td>';
                        echo '<td><img class="img-responsive img-thumbnail" src="'.$row["prod_img1"].'"></td>';
                        echo '<td>'.$row["cat_name"] .'</td></b>';
                        echo '<td> <a href="productupdate.php?id='.$row["prod_id"].'"><span class="glyphicon glyphicon-pencil"></span></a> | 
                        <a href="productdelete.php?id='.$row["prod_id"].'"><span class="glyphicon glyphicon-trash"></span></a> |
                        <a href="productdetails.php?id='.$row["prod_id"].'"><span class="glyphicon glyphicon-eye-open"></span></a> </td>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <input type="submit" name="btndelete" value="Delete All" class="form-control">
        </form>
        </div>  
    </body>
</html>