<?php
$tk=$_GET["tok"];
$id=$_GET["id"];
echo $tk;
echo $id;
$conn=new mysqli('localhost','root','','project_db');
$sql="select * from user_tbl where pk_email_id='".$id."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if($row["token"]==$tk)
{
    $sql="update user_tbl set verify='yes' where pk_email_id='".$id."'";
    $res=$conn->query($sql);
    header('location:user_login.php');
}
?>