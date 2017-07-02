<?php
class user_sign
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','project_db');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }
public function insuser($id,$name,$pass,$address,$mobile,$gender,$targetfile,$type,$ver,$token)
    {
        $conn=user_sign::connect();
        $conn=new mysqli('localhost','root','','project_db');
        $sql="insert into user_tbl values('".$id."','".$name."','".$pass."','".$address."','".$mobile."','".$gender."','".$targetfile."','".$type."','".$ver."','".$token."')";
        $res=$conn->query($sql);
        return $res;
        user_sign::disconnect();
}
}




class user_login
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','project_db');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function getuser($id,$ps)
    {
                $conn=user_login::connect();
                $sql="select * from user_tbl where pk_email_id='".$id."' and password='".$ps."'";
                $res=$conn->query($sql);
                return $res;
                user_login::disconnect();
    }

    public function userch()
    {
                $conn=user_login::connect();
                $sql="select * from user_tbl where pk_email_id='".$_SESSION["userid"]."' and password='".$_SESSION["userpass"]."'";
                $res=$conn->query($sql);
                return $res;
                user_login::disconnect();
    }
}




class user_disp
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','project_db');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }
    public function getuser()
    {
        $conn=user_disp::connect();
        $id=$_SESSION["userid"];
        $conn=new mysqli('localhost','root','','project_db');
        $sql="select * from user_tbl where pk_email_id='".$id."'";
        $res=$conn->query($sql);
        return $res;
        user_disp::disconnect();
    }
    public function getuserch()
    {
        $conn=user_disp::connect();
        $id=$_SESSION["userid"];
        $ps=$_SESSION["userps1"];
        $sql="update user_tbl set password='".$ps."' where pk_email_id='".$id."'";
        $res=$conn->query($sql);
        return $res;
        user_disp::disconnect();
    }
}
class userdb{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','project_db');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }
    public function userdisplay()
    {
        $conn=userdb::connect();
        $conn=new mysqli('localhost','root','','project_db');
        $sql="select * from user_tbl";
        $res=$conn->query($sql);
        return $res;
        userdb::disconnect();
    }
    public function useradd($_emailid,$_uname,$_pass,$_address,$_mobile,$_gen,$_img,$_usertype,$_userveri,$token){
        $conn=userdb::connect();
        $conn=new mysqli('localhost','root','','project_db');
        $sql="insert into user_tbl values('".$_emailid."','".$_uname ."','".$_pass ."','".$_address ."','".$_mobile ."','".$_gen ."','".$_img ."','".$_usertype ."','". $_userveri."','".$token ."')";
        $res=$conn->query($sql);
        return $res;
        userdb::disconnect();
    }
    public function userdetail($_emailid){
        $conn=userdb::connect();
        $conn=new mysqli('localhost','root','','project_db');
        $sql="select * from user_Tbl where pk_email_id='".$_emailid."'";
        $res=$conn->query($sql);
        return $res;
        userdb::disconnect();
    }
    public function deleteusers($all){
        $conn=userdb::connect();
        $conn=new mysqli('localhost','root','','project_db');
        $sql="delete from user_tbl where pk_email_id IN ($all)";
        $res=$conn->query($sql);
        return $res;
        userdb::disconnect();
    }
    public function deleteuser($_emailid){
        $conn=userdb::connect();
        $conn=new mysqli('localhost','root','','project_db');
        $sql="delete from user_tbl where pk_email_id='".$_emailid."'";
        $res=$conn->query($sql);
        return $res;
        userdb::disconnect();
    }
}


?>