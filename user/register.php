<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
    <!---//End-rate---->
</head>

<body>
    <?php
	include 'user_navbar.php';
    include '../shared/database_user.php';
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $obj=new user_sign();
        $res=$obj->insuser(); 
    }
	?>
        </div>
        <!--banner-->
        <div class="banner-top">
            <div class="container">
                <h1>Register</h1>
                <em></em>
                <h2><a href="index.html">Home</a><label>/</label>Register</h2>
            </div>
        </div>
        <!--login-->
        <div class="container">
            <div class="login">
                <form method="post" action="register_code.php" enctype="multipart/form-data">
                    <div class="col-md-6 login-do">
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
                            <textarea rows="7" cols="56" name="txtadd"></textarea>
                            <i class="glyphicon glyphicon-home"></i>
                        </div>
                        
                        <div class="login-mail">
                            <input type="text" placeholder="Phone Number" name="txtmobile" required="">
                            <i class="glyphicon glyphicon-phone"></i>
                        </div>
                        
                        <div class="login-mail">
                            <input type="radio" name="gender" value="male">Male
                            &nbsp &nbsp<input type="radio" name="gender" value="female">Female
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="glyphicon glyphicon-user"></i>
                        </div>

                        
                        <div class="login-mail">
                            <input type="file" name="pro_img">
                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="glyphicon glyphicon-picture"></i>
                        </div>

                       


                        <label class="hvr-skew-backward">
					    <input type="submit" value="Submit" name="btnsub">
				</label>

                    </div>
                    <div class="col-md-6 login-right">
                        <h3>Completely Free Account</h3>

                        <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent
                            porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                        <a href="user_login.php" class="hvr-skew-backward">Login</a>

                    </div>

                    <div class="clearfix"> </div>
                </form>
            </div>

        </div>

        <!--//login-->

        <!--brand-->
        <div class="container">
            <div class="brand">
                <div class="col-md-3 brand-grid">
                    <img src="images/ic.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic1.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic2.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic3.png" class="img-responsive" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--//brand-->

        <!--//content-->
        <!--//footer-->
        <div class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="col-md-3 footer-middle-in">
                        <a href="index.html"><img src="images/log.png" alt=""></a>
                        <p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
                    </div>

                    <div class="col-md-3 footer-middle-in">
                        <h6>Information</h6>
                        <ul class=" in">
                            <li><a href="404.html">About</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="contact.html">Site Map</a></li>
                        </ul>
                        <ul class="in in1">
                            <li><a href="#">Order History</a></li>
                            <li><a href="wishlist.html">Wish List</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 footer-middle-in">
                        <h6>Tags</h6>
                        <ul class="tag-in">
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Sed</a></li>
                            <li><a href="#">Ipsum</a></li>
                            <li><a href="#">Contrary</a></li>
                            <li><a href="#">Chunk</a></li>
                            <li><a href="#">Amet</a></li>
                            <li><a href="#">Omnis</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-middle-in">
                        <h6>Newsletter</h6>
                        <span>Sign up for News Letter</span>
                        <form>
                            <input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <ul class="footer-bottom-top">
                        <li>
                            <a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a>
                        </li>
                    </ul>
                    <p class="footer-class">&copy; 2016 Shopin. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//footer-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="js/simpleCart.min.js">
        </script>
        <!-- slide -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>

</html>