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
        public function getTotal($id){
            $con=billdb::connect();
<<<<<<< HEAD
            $sql="select p.*,c.*,b.*,d.* from product_tbl p,cart_tbl c,cat_tbl b,bill_tbl d where p.prod_id=c.fk_product_id AND p.fk_cat_id=b.pk_cat_id AND d.fk_prod_id=p.prod_id";
=======
            //$sql="select p.*,c.*,b.*,d.* from product_tbl p,cart_tbl c,cat_tbl b,bill_tbl d where p.prod_id=c.fk_product_id AND p.fk_cat_id=b.pk_cat_id AND d.fk_prod_id=p.prod_id AND d.bill_no=".$id;
            $sql="select b.* from user_tbl u,product_tbl p,bill_tbl b where p.prod_id=b.fk_prod_id AND u.pk_email_id=b.fk_email_id AND b.fk_email_id=".$id;
            echo $sql;
>>>>>>> b9b1e9193e745709e50eb391c4533e96173fadf9
            $result=$con->query($sql);
            billdb::disconnect();
            return $result;
        }
}
?>