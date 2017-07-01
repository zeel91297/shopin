<?php
        //echo "hiii";
        $all=implode(",",$_POST["chk"]);
        //echo $all;
        require '../shared/database_user.php';
        $obj=new userdb();
        $result=$obj->deleteusers($all);
        //header('location:users.php');
        echo "delete from user_tbl where pk_email_id IN ($all)";
?>