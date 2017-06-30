<?php
        //echo "hiii";
        $all=implode(",",$_POST["chk"]);
        //echo $all;
        require '../shared/databaseproduct.php';
        $obj=new productdb();
        $result=$obj->productDelete($all);
        header('location:products.php');
   
?>