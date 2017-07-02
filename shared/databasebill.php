<?php
class billdb{
        private static $con=null;
        public static function connect(){
            self::$con=mysqli_connect('localhost','root','','project_db');
            return self::$con;
        }
        public static function disconnect(){
            mysqli_close(self::$con);
            self::$con=NULL;
        }
        public function getBills(){
            $con=billdb::connect();
            $sql="select p.*,b.* from product_tbl p,bill_tbl b where p.prod_id=b.fk_prod_id";
            $result=$con->query($sql);
            billdb::disconnect();
            return $result;
        }
        public function billdelete($all){
            $con=billdb::connect();
            $sql="delete from bill_tbl where bill_no IN ($all)";
            //echo $sql;
            $result=$con->query($sql);
            billdb::disconnect();
            return $result;
        }
}
?>