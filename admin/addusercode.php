<?php
$_emailid=$_POST["txtmail"];
$_uname=$_POST["txtname"];
$_pass=$_POST["txtpass"];
$_address=$_POST["txtadd"];
$_mobile=$_POST["txtmobile"];
$_gen=$_POST["gender"];
$_usertype=$_POST["usertype"];
$_img="../images/".basename($_FILES["proimg"]["name"]);
move_uploaded_file($_FILES["proimg"]["tmp_name"],"../images/".$_img);
$random_Alpha=md5(rand());
$token=substr($random_Alpha,0,10);
$_userveri="yes";
require '../shared/database_user.php';
$obj=new userdb();
$result=$obj->useradd($_emailid,$_uname,$_pass,$_address,$_mobile,$_gen,$_img,$_usertype,$_userveri,$token);
if($result===TRUE){
    header('location:users.php');
}
else{
    echo "User not created";
    echo "insert into user_tbl values('".$_emailid."','".$_uname ."','".$_pass ."','".$_address ."','".$_mobile ."','".$_gen ."','".$_img ."','".$_usertype ."','". $_userveri."','".$token ."')";
}
?>