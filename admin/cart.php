<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
        <?php 
            include 'admin_navbar.php';
            require '../shared/cart_class.php';
            $obj=new cart();
            $result=$obj->display();
        ?>
        <div class="table-responsive container">
        <!--<a href="productinsert.php" class="btn btn-primary" role="button">Insert A Record</a>-->
        <form method="post" action="deleteallpro.php">
            <table class="table table-hover">
                <thead>
                    <th>Delete</th>
                    <th>Email ID</th>
                    <th>Product Name</th>
                    <th>Cart Quantity</th>
                    <th>Product Stock On Hand</th>
                    <th>Product Image</th>
                    <th>Product Category</th>
                </thead>
                <?php
                    while($row=$result->fetch_assoc())
                    {
                        echo '<b><tr class="active">';
                        echo '<td><input type="checkbox" name="chk[]" value="'.$row["cart_id"].'"></td>';
                        echo '<td>'.$row["fk_email_id"] .'</td>';
                        echo '<td>'.$row["prod_name"] .'</td>';
                        echo '<td>'.$row["cart_qty"] .'</td>';
                        echo '<td>'.$row["prod_soh"] .'</td>';
                        echo '<td><img class="img-responsive img-thumbnail" src="'.$row["prod_img1"].'"></td>';
                        echo '<td>'.$row["cat_name"] .'</td></b>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <input type="submit" name="btndelete" value="Delete All" class="form-control">
        </form>
        </div>  
    </body>
</html>