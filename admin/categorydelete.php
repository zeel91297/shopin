<?php
    $_catid=$_GET["id"];
    require '../shared/databasecategory.php';
        $obj=new catdb;
        $result=$obj->catDelete($_catid);
        if($result===true){
            header('location:category.php');
            //echo "update product_tbl set prod_name='".$_proname ."',prod_price='".$_proprice ."',prod_color='".$_prodcolor ."',prod_img1='".$_pimg1 ."',prod_img2='".$_pimg2 ."',prod_img3='".$_pimg3 ."',prod_mfg='".$_prodmfg ."',prod_warranty='".$_prodwarr ."',prod_soh='".$_prodsoh ."',prod_desc='".$_proddesc."',fk_cat_id='".$_fk_catid."' where prod_id='".$_prodid ."' ";
        }
        else{
            echo "Records not Deleted";
            echo "";
        }
?>