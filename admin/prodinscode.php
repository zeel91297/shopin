<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
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
    $_pimg2="hi";
    $_pimg3="hey";
        //echo $_target;
        require '../shared/databaseproduct.php';
        $obj=new productdb;
        $res=$obj->productInsert($_proname,$_proprice,$_prodmfg,$_prodcolor,$_pimg1,$_pimg2,$_pimg3,$_prodwarr,$_prodsoh,$_proddesc,$_fk_catid);
        if($res===true){
            header('location:products.php');
            //echo "success";
        }
        else{
            echo "Not inserted";
            //echo $sql;
        }
    }
    else{
        echo "not";
    }

?>