<?php
include 'database_user.php';
$obj=new user_sign();
$id=$_POST["txtmail"];
$name=$_POST["txtname"];
$pass=$_POST["txtpass"];
$address=$_POST["txtadd"];
$mobile=$_POST["txtmobile"];
$gen=$_POST["gender"];
$img=basename($_FILES["pro_img"]["name"]);
$rand_alpha=md5(rand());
        $token=substr($rand_alpha,0,6);
        if(basename($_FILES["pro_img"]["name"])==null)
        {
            if($_POST["gender"]=="male")
            {
                $targerdir="images/";
                $targetfile=$targerdir."dboy.jpg";
            }
            else
            {
                $targerdir="images/";
                $targetfile=$targerdir."dgirl.jpg";
            }
        }
        else
        {
            $targerdir="images/";
            $targetfile=$targerdir.basename($_FILES["pro_img"]["name"]);
            move_uploaded_file($_FILES["pro_img"]["tmp_name"],$targetfile);
        }
        $res=$obj->insuser($id,$name,$pass,$address,$mobile,$gen,$targetfile,'user','no',$token);
        if($res===true)
        {
            header('location:user_login.php');
        }
        else
        {
            echo $sql;
        }error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
        require_once "phpmailer/class.phpmailer.php";
        $e1=$_POST["txtmail"];
        $message="localhost/bootstrapdemo/project/user_varify.php?tok='".$token."'&id='".$_POST["txtmail"]."'";
        // creating the phpmailer object
        $mail = new PHPMailer(true);

        // telling the class to use SMTP
        $mail->IsSMTP();

        // enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
        $mail->SMTPDebug = 0;

        // enable SMTP authentication
        $mail->SMTPAuth = true;

        // sets the prefix to the server
        $mail->SMTPSecure = 'ssl';

        // sets GMAIL as the SMTP server
        $mail->Host = 'smtp.gmail.com';

        // set the SMTP port for the GMAIL server
        $mail->Port = 465;

        // your gmail address
        $mail->Username = 'maildemo254@gmail.com';

        // your password must be enclosed in single quotes
        $mail->Password = 'maildemo1234';

        // add a subject line
        $mail->Subject = ' veri ';

        // Sender email address and name
        $mail->SetFrom('maildemo254@gmail.com', 'demo');

        $email1=$e1;
        // reciever address, person you want to send
        $mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

    // add message body
        $mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

    try {
        // send mail
	
	    //don't forget to enable openssl true from php_extensions
         $mail->Send();
         $msg = "Mail send successfully";
    } catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}

?>