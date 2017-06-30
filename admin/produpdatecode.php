<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $_oldimg1=$_GET["img1"];
        $_oldimg2=$_GET["img2"];
        $_oldimg3=$_GET["img3"];
        $_prodid=$_GET["pro_id"];
        $_proname=$_POST["txtpname"];
        $_proprice=$_POST["txtpprice"];
        $_prodmfg=$_POST["txtpmanu"];
        $_prodcolor=$_POST["txtpcolor"];
        $_prodwarr=$_POST["txtpwarranty"];
        $_prodsoh=$_POST["txtpsoh"];
        $_proddesc=$_POST["txtdesc"];
        $_fk_catid=$_POST["fk_cat_id"];
        $_pimg1="../images/".basename($_FILES["txtpimg1"]["name"]);
        move_uploaded_file($_FILES["txtpimg1"]["tmp_name"],$_pimg1);
        $_pimg2="../images/".basename($_FILES["txtpimg2"]["name"]);
        $_pimg3="../images/".basename($_FILES["txtpimg3"]["name"]);
        //echo $_target;
        if($_pimg1==""){
            $_pimg1=$_oldimg1;
        }
        else{
            //unlink($oldimg);
            move_uploaded_file($_FILES["txtpimg1"]["tmp_name"],"../images/".$_pimg1);
            $_pimg1="../images/".$_pimg1;
        }
        if($_pimg2==""){
            $_pimg2=$_oldimg2;
        }
        else{
            //unlink($oldimg);
            move_uploaded_file($_FILES["txtpimg2"]["tmp_name"],"../images/".$_pimg2);
            $_pimg2="../images/".$_pimg2;
        }
        if($_pimg3==""){
            $_pimg3=$_oldimg3;
        }
        else{
            //unlink($oldimg);
            move_uploaded_file($_FILES["txtpimg3"]["tmp_name"],"../images/".$_pimg3);
            $_pimg3="../images/".$_pimg3;
        }
        require '../shared/databaseproduct.php';
        $obj=new productdb;
        $result=$obj->productUpdate($_prodid,$_proname,$_proprice,$_prodmfg,$_prodcolor,$_pimg1,$_pimg2,$_pimg3,$_prodwarr,$_prodsoh,$_proddesc,$_fk_catid);
        if($result===true){
           header('location:products.php');
            //echo "update product_tbl set prod_name='".$_proname ."',prod_price='".$_proprice ."',prod_color='".$_prodcolor ."',prod_img1='".$_pimg1 ."',prod_img2='".$_pimg2 ."',prod_img3='".$_pimg3 ."',prod_mfg='".$_prodmfg ."',prod_warranty='".$_prodwarr ."',prod_soh='".$_prodsoh ."',prod_desc='".$_proddesc."',fk_cat_id='".$_fk_catid."' where prod_id='".$_prodid ."' ";
        }
        else{
            echo "Records not updated";
            echo "update product_tbl set prod_name='".$_proname ."',prod_price='".$_proprice ."',prod_color='".$_prodcolor ."',prod_img1='".$_pimg1 ."',prod_img2='".$_pimg2 ."',prod_img3='".$_pimg3 ."',prod_mfg='".$_prodmfg ."',prod_warranty='".$_prodwarr ."',prod_soh='".$_prodsoh ."',prod_desc='".$_proddesc."',fk_cat_id='".$_fk_catid."' where prod_id='".$_prodid ."' ";
        }
    }
?>