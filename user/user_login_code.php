<?php
    session_start();
    require '../shared/database_user.php';
    $obj=new user_login();
	if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST["btnfor"]))
        {

        }
        $id=$_POST["txtmail"];
        $pass=$_POST["txtpass"];
        $res=$obj->getuser($id,$pass);
        if($res->num_rows==1)
        {

            $row=$res->fetch_assoc();
            if($row["verify"]=="yes")
            {
                $_SESSION["userid"]=$id;
                if($row["user_type"]=="user")
                {
                    header('location:user_disp.php');
                }
                else
                {
                    header('location:products.php');
                }
                 
            }
            else
            {
                echo '<script>';
                echo 'alert("Please Check Your Email And click on link to verify")';
                echo '</script>'; 
                header('location:user_login.php');   
            }
        }
        else{
            
            header('location:user_login.php');
            echo '<script>';
            echo 'alert("Please Check User Id Or Password")';
            echo '</script>';
        }
    }
?>