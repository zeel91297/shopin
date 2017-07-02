<?php
    session_start();
    $_proid=$_GET["prod_id"];
    $_prodprice=$_GET["prod_price"];
    $_mailid=$_SESSION["userid"];
    $_paytype=$_POST["paytype"];
    $_ship=$_POST["txtadd"];
    $conn=new mysqli('localhost','root','','project_db');
    $sql="insert into bill_tbl (fk_email_id,fk_prod_id,bill_amount,bill_date,ship_address,pay_type) values('". $_mailid."','".$_proid ."','".$_prodprice ."','".date("Y-m-d")."','".$_ship."','".$_paytype."')";
    $result=$conn->query($sql);
    if($result===true){
        header('location:billfinal.php');
    }
    else{
        echo "Not done";
    }
?>