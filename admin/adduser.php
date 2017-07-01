<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
    <?php
        include 'admin_navbar.php';
        include '../shared/database_user.php';
    ?>
        <div class="container">
            <div class="login">
                <form method="post" action="addusercode.php" enctype="multipart/form-data">
                    <div class="col-md-10 login-do">
                        <div class="login-mail">
                            <input type="text" placeholder="Email" required name="txtmail">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </div>
                        <div class="login-mail">
                            <input type="text" placeholder="Name" required name="txtname">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="login-mail">
                            <input type="password" placeholder="Password" name="txtpass" required="">
                            <i class="glyphicon glyphicon-lock"></i>
                        </div>

                        <div class="login-mail" border=0>
                            <textarea rows="7" cols="100" name="txtadd"></textarea>
                            <i class="glyphicon glyphicon-home"></i>
                        </div>
                        
                        <div class="login-mail">
                            <input type="text" placeholder="Phone Number" name="txtmobile" required="">
                            <i class="glyphicon glyphicon-phone"></i>
                        </div>
                        
                        <div class="login-mail">
                            <input type="radio" name="gender" value="male">Male
                            &nbsp &nbsp<input type="radio" name="gender" value="male">Female
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="glyphicon glyphicon-user"></i>
                        </div>

                        
                        <div class="login-mail">
                            <input type="file" name="proimg" required="">
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="glyphicon glyphicon-picture"></i>
                        </div>

                        <div class="login-mail form-group">
                            <select name="usertype" class="form-control">
                                <option value="user">User</option>
                                <option value="admin" selected>Admin</option>
                            </select>
                        </div>

                        <label class="hvr-skew-backward">
					    <input type="submit" value="Submit" name="btnsub">
				</label>

                    </div>

                    <div class="clearfix"> </div>
                </form>
            </div>

        </div>

        <!--//login-->
    </body>
</html>