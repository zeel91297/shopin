<?php

class cart
{
    private static $con=null;

    public static function connect()
    {
        self::$con=mysqli_connect('localhost','root','','project_db');
        return self::$con;
    }

    public static function disconnect()
    {
        mysqli_close(self::$con);
        self::$con=null;
    }
    public function display1()
    {
        $con=cart::connect();
        $sql="select p.*,c.* from product_tbl p,cart_tbl c where p.prod_id=c.fk_product_id ";
        $result=$con->query($sql);
        return $result;
        cart::disconnect();
    }

    public function display()
    {
        $con=cart::connect();
        $sql="select p.*,c.*,b.* from product_tbl p,cart_tbl c,cat_tbl b where p.prod_id=c.fk_product_id AND p.fk_cat_id=b.pk_cat_id";
        $result=$con->query($sql);
        return $result;
        cart::disconnect();
    }

    public function cart_ins($_id,$_pro_id)
    {
        $con=cart::connect();
        $sql="insert into cart_tbl(fk_email_id,fk_product_id,cart_qty) values('".$_id."','".$_pro_id."','1')";
        $result=$con->query($sql);
        return $result;
        cart::disconnect();   
    }

    public function cart_update($qty,$cart_id)
    {
        $con=cart::connect();
        $sql="update  cart_tbl set cart_qty='".$qty."'where cart_id='".$cart_id."'";
        $result=$con->query($sql);
        return $result;
        cart::disconnect();
    }


    public function delete($_cart_id)
    {
        $con=cart::connect();
        $sql="delete from cart_tbl where cart_id=".$_cart_id;
        $result=$con->query($sql);

        return $result;
        cart::disconnect();  
    }
}

?>