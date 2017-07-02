<?php
    session_start();
    include 'database_user.php';
    $obj=new user_disp();
    $result=$obj->getuser();
    $row=$result->fetch_assoc();

    $tg="images/";
    if(isset($_POST["btndel"]))
    {
        unlink($row["profile_pic"]);
        if($row["gender"]=="male")
        {
            $img="images/dboy.jpg";
        }
        else
        {
            $img="images/dboy.jpg";
        }
        $conn=new mysqli('localhost','root','','project_db');
        $sql="update user_tbl set profile_pic='".$img."' where pk_email_id='".$_SESSION["userid"]."'";
        $res=$conn->query($sql);
        if($res===true)
        {
            header('location:user_edit.php');
        }
    }
    if(isset($_POST["btnup"]))
    {
        $pimg=basename($_FILES["f1"]["name"]);
        if($pimg=="")
        {
            $pimg=$row["profile_pic"];
        }
        else
        {
            $tg1=$tg.$pimg;
            unlink($row["profile_pic"]);
            move_uploaded_file($_FILES["f1"]["tmp_name"],$tg1);
            $pimg=$tg1;  
        }
        $conn=new mysqli('localhost','root','','project_db');
        $sql="update user_tbl set uname='".$_POST["txtname"]."',address='".$_POST["txtadd"]."',mobile_no='".$_POST["txtmobi"]."',gender='".$_POST["gen"]."',profile_pic='".$pimg."' where pk_email_id='".$_SESSION["userid"]."'";
        echo $sql;
        if($conn->query($sql)===true)
        {
            header('location:user_disp.php');
        }
    }
    
    ?>