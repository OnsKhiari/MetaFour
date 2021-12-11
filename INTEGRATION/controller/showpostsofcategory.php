<?php
include '../config.php' ;
$pdo= config::getConnexion();

if( !empty($_GET['category_id']) ){

    
    $category_id= $_GET['category_id'];

    $checkifcategoryexist= $pdo->prepare('SELECT * FROM category WHERE category_id=?');
    $checkifcategoryexist->execute(array($category_id));

    if($checkifcategoryexist->rowCount() >0){

        $categoryinfos=$checkifcategoryexist->fetch();
        $category_name=$categoryinfos['category_name'];
        $category_id=$categoryinfos['category_id'];

        $getpostsofcategory=$pdo->prepare('SELECT * FROM post WHERE post_category=?');
        $getpostsofcategory->execute(array($category_id));

    }else{
        echo"no";
    }

}else{
  echo "not found";
}