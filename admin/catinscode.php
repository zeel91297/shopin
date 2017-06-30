<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $_cname=$_POST["txtcname"];
        require '../shared/databasecategory.php';
        $obj=new catdb();
        $result=$obj->catInsert($_cname);
        if($result===true){
            header('location:category.php');
        }
        else{
            echo "Not inserted";
        }
    }
?>