<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
        <?php
            include 'admin_navbar.php';
            require '../shared/database_user.php';
            $obj=new userdb();
            $result=$obj->userdisplay();
        ?>
        <div class="table-responsive container">
        <!--<a href="productinsert.php" class="btn btn-primary" role="button">Insert A Record</a>-->
        <form method="post" action="deletealluser.php">
            <table class="table table-hover">
                <thead>
                    <th>Delete</th>
                    <th>User Name</th>
                    <th>Email ID</th>
                    <th>Profile Picture</th>
                    <th>User Type</th>
                    <th>Action</th>
                </thead>
                <?php
                    while($row=$result->fetch_assoc())
                    {
                        echo '<b><tr class="active">';
                        echo '<td><input type="checkbox" name="chk[]" value="'.$row["pk_email_id"].'"></td>';
                        echo '<td><img class="img-responsive img-thumbnail" src="'.$row["profile_pic"].'"></td>';
                        echo '<td>'.$row["pk_email_id"] .'</td>';
                        echo '<td>'.$row["uname"] .'</td>';
                        echo '<td>'.$row["user_type"] .'</td>';
                        echo '<td> <a href="productupdate.php?id='.$row["pk_email_id"].'"><span class="glyphicon glyphicon-pencil"></span></a> | 
                        <a href="userdelete.php?id='.$row["pk_email_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | 
                        <a href="userdetails.php?id='.$row["pk_email_id"].'"><span class="glyphicon glyphicon-eye-open"></span></a> </td>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <input type="submit" name="btndelete" value="Delete All" class="form-control">
        </form>
        </div>  
    </body>
</html>