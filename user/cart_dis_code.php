<?php
session_start();
$_id=$_SESSION["userid"];
$_pro_id=$_GET["pro_id"];
//$_qty=$_POST["qty"];
require '../shared/cart_class.php';
$obj=new cart();
$res=$obj->cart_ins($_id,$_pro_id);
if($res===true)
{
    header('location:prod.php');
    
}
else{
    echo "not";
}

?>