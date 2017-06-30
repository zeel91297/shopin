<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_catid=$_GET["id"];
    $_catname=$_POST["txtcname"];
    require '../shared/databasecategory.php';
        $obj=new catdb;
        $result=$obj->catUpdate($_catid,$_catname);
        if($result===true){
            header('location:category.php');
            echo "update cat_tbl set cat_name='".$_catname ."' where pk_cat_id='".$_catid ."'";
            //echo "update product_tbl set prod_name='".$_proname ."',prod_price='".$_proprice ."',prod_color='".$_prodcolor ."',prod_img1='".$_pimg1 ."',prod_img2='".$_pimg2 ."',prod_img3='".$_pimg3 ."',prod_mfg='".$_prodmfg ."',prod_warranty='".$_prodwarr ."',prod_soh='".$_prodsoh ."',prod_desc='".$_proddesc."',fk_cat_id='".$_fk_catid."' where prod_id='".$_prodid ."' ";
        }
        else{
            echo "Records not updated";
            echo "";
        }
}
?>