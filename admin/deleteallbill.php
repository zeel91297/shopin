<?php
        //echo "hiii";
        $all=implode(",",$_POST["chk"]);
        //echo $all;
        require '../shared/databasebill.php';
        $obj=new billdb();
        $result=$obj->billdelete($all);
        header('location:users.php');
        //echo "delete from user_tbl where pk_email_id IN ($all)";
?>