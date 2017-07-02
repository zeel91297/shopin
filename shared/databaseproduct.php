<?php
    class productdb{
        private static $conn=null;
        public static function connect(){
            self::$conn=mysqli_connect('localhost','root','','project_db');
            return self::$conn;
        }
        public static function disconnect(){
            mysqli_close(self::$conn);
            self::$conn=NULL;
        }
        public function productdisplay(){
            $conn=productdb::connect();
            $sql="select p.*,c.* from product_tbl p,cat_tbl c where p.fk_cat_id=c.pk_cat_id";
            $result=$conn->query($sql);
            productdb::disconnect();
            return $result;
        }
        public function getAllProducts(){
            $conn=productdb::connect();
            $sql="select * from product_tbl";
            $result=$conn->query($sql);
            productdb::disconnect();
            return $result;
        }
        public function productInsert($_proname,$_proprice,$_prodmfg,$_prodcolor,$_pimg1,$_pimg2,$_pimg3,$_prodwarr,$_prodsoh,$_proddesc,$_fk_catid){
            $conn=productdb::connect();
            $sql="insert into product_tbl
                (prod_name,prod_price,prod_mfg,prod_color,prod_img1,prod_img2,prod_img3,prod_warranty,prod_soh,prod_desc,fk_cat_id) 
                values('".$_proname."','".$_proprice ."','".$_prodmfg."','".$_prodcolor."','".$_pimg1."','".$_pimg2."','".$_pimg3."','".$_prodwarr ."','".$_prodsoh."','".$_proddesc."','".$_fk_catid."')";
            $result=$conn->query($sql);
            echo $sql;
            productdb::disconnect();
            return $result;
        }
        public function productDelete($all){
            $conn=productdb::connect();
            $sql="delete from product_tbl where prod_id IN ($all) ";
            $res=$conn->query($sql);          
            return $res;
            productdb::disconnect();
        }
        public function productDel($product_id){
            $conn=productdb::connect();
            $sql="select * from product_tbl where prod_id='.$product_id.'";
            $res=$conn->query($sql);          
            $row=$res->fetch_assoc();
            unlink($row["prod_img"]);            
            $sql="delete from product_tbl where prod_id=".$product_id;
            //echo $sql;
            $result=$conn->query($sql);
            productdb::disconnect();
            return $result;
        }
        public function productUpdate($_prodid,$_proname,$_proprice,$_prodmfg,$_prodcolor,$_pimg1,$_pimg2,$_pimg3,$_prodwarr,$_prodsoh,$_proddesc,$_fk_catid){
            $conn=productdb::connect();
            $sql="update product_tbl set prod_name='".$_proname ."',prod_price='".$_proprice ."',prod_color='".$_prodcolor ."',prod_img1='".$_pimg1 ."',prod_img2='".$_pimg2 ."',prod_img3='".$_pimg3 ."',prod_mfg='".$_prodmfg ."',prod_warranty='".$_prodwarr ."',prod_soh='".$_prodsoh ."',prod_desc='".$_proddesc."',fk_cat_id='".$_fk_catid."' where prod_id='".$_prodid ."' ";
            $result=$conn->query($sql);
            productdb::disconnect();
            return $result;
        }
        public function productdetail($product_id){
            $conn=productdb::connect();
            $sql="select p.*,c.* from product_tbl p,cat_tbl c where p.fk_cat_id=c.pk_cat_id AND prod_id='".$product_id."'";
            $res=$conn->query($sql);          
            return $res;
            productdb::disconnect();
        }
    }
?>