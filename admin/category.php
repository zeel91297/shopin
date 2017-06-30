<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
        <?php
            include 'admin_navbar.php';
            require '../shared/databasecategory.php';
            $obj=new catdb();
            $result=$obj->getAllCategory();
        ?>
        <div class="table-responsive container">
        <!--<a href="productinsert.php" class="btn btn-primary" role="button">Insert A Record</a>-->
        <form method="post" action="deleteallcat.php">
            <table class="table table-hover">
                <thead>
                    <th>Delete</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </thead>
                <?php
                    while($row=$result->fetch_assoc())
                    {
                        echo '<b><tr class="active">';
                        echo '<td><input type="checkbox" name="chk[]" value="'.$row["pk_cat_id"].'"></td>';                        
                        echo '<td>'.$row["cat_name"] .'</td></b>';
                        echo '<td> <a href="categoryupdate.php?id='.$row["pk_cat_id"].'"><span class="glyphicon glyphicon-pencil"></span></a> | 
                        <a href="categorydelete.php?id='.$row["pk_cat_id"].'"><span class="glyphicon glyphicon-trash"></span></a> </td>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <input type="submit" name="btndelete" value="Delete All" class="form-control">
        </form>
        </div>  
    </body>
</html>