<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
    <?php
        include 'admin_navbar.php';
    ?>
    <form action="catinscode.php" method="post" class="container" enctype="multipart/form-Data">
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Category Name" name="txtcname" required>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Insert 
            <span class="glyphicon glyphicon-check" ></span>
            </button>
        </div>
    </form>
    </body>
</html>