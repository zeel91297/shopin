<?php
        //echo "hiii";
        $all=implode(",",$_POST["chk"]);
        //echo $all;
        require '../shared/databasecategory.php';
        $obj=new catdb();
        $result=$obj->categorydelete($all);
        header('location:category.php');
   
?>