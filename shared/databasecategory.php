<?php
    class catdb{
        private static $con=null;
        public static function connect(){
            self::$con=mysqli_connect('localhost','root','','project_db');
            return self::$con;
        }
        public static function disconnect(){
            mysqli_close(self::$con);
            self::$con=NULL;
        }
        public function getAllCategory(){
            $conn=catdb::connect();
            $sql="select * from cat_tbl";
            $result=$conn->query($sql);
            catdb::disconnect();
            return $result;
        }
        public function catInsert($cat_name){
            $conn=catdb::connect();
            $sql="insert into cat_tbl (cat_name) values('".$cat_name."')";
            $result=$conn->query($sql);
            //echo $sql;
            catdb::disconnect();
            return $result;
        }
        public function categorydelete($all){
            $conn=catdb::connect();
            $sql="delete from cat_tbl where pk_cat_id IN ($all)";
            //echo $sql;
            $result=$conn->query($sql);
            catdb::disconnect();
            return $result;
        }
        public function catDelete($_catid){
            $conn=catdb::connect();
            $sql="delete from cat_tbl where pk_cat_id=".$_catid;
            //echo $sql;
            $result=$conn->query($sql);
            catdb::disconnect();
            return $result;
        }
        public function catUpdate($cat_id,$cat_name){
            $conn=catdb::connect();
            $sql="update cat_tbl set cat_name='".$cat_name ."' where pk_cat_id='".$cat_id ."'";
            echo $sql;
            $result=$conn->query($sql);
            catdb::disconnect();
            return $result;
        }
    }
?>