<?php
$_cart_id=$_GET["cart_id"];
echo $_cart_id;
require '../shared/cart_class.php';
$obj=new cart();
$res=$obj->delete($_cart_id);
if($res===true)
{
    header('location:checkout.php');
}
else 
{
    echo "false";
}
?>