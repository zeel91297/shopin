<?php
    $_cart_id=$_GET["id"];
   
    $_qty=$_POST["txtqty"];
    
   require '../shared/cart_class.php';
    $obj=new cart();
    $result=$obj->cart_update($_qty,$_cart_id);
  if($result===true)
    {
       header('location:checkout.php');
    }
    else
    {
        echo $result;
    } 
?>