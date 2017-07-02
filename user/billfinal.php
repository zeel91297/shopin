<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        
    </head>
    <body>
        <?php
            include 'user_navbar.php';
<<<<<<< HEAD
        ?>
=======
            $_mailid=$_SESSION["userid"];
        ?>
        <div class="table-responsive container">
        <table class="table table-hover" >
            <thead>
                <th>Bill No</th>
                <th>Emai ID</th>
                <th>Product Name</th>
                <th>Bill Date</th>
                <th>Total Amount</th>
            </thead>
           
                <?php
                    require '../shared/databasebill.php';
                    $obj=new billdb();
                    $result=$obj->getTotal($_mailid);
                    while($row=$result->fetch_assoc())
                    {
                    echo '<tr>';
                    echo '<td>'.$row["bill_no"].'</td>';
                    echo '<td>'.$row["fk_email_id"].'</td>';
                    echo '<td>'.$row["prod_name"].'</td>';
                    echo '<td>'.$row["bill_date"].'</td>';
                    echo '<td>'.$row["bill_amount"].'</td>';
                    echo ' </tr>';
                    }
                ?>
            </tr>
        </table>
        </div>
>>>>>>> b9b1e9193e745709e50eb391c4533e96173fadf9
    </body>
</html>