<?php
include '../config.php' ;
$pdo= config::getConnexion();

if(!isset($_SESSION['auth'])){
    header('Location: ../views/0login.php');
}

if(isset($_GET['category_id']) && !empty($_GET['category_id'])){

    $category_id= $_GET['category_id'];

    $checkifcategoryexists= $pdo->prepare('SELECT category_user FROM category WHERE category_id=?');
    $checkifcategoryexists->execute(array($category_id));

    if($checkifcategoryexists->rowCount() >0 ){

        $user_info= $checkifcategoryexists->fetch();
        if($user_info['category_user'] == $_SESSION['user_id']){

            $deletecategory = $pdo->prepare('DELETE FROM category WHERE category_id=?');
            $deletecategory->execute(array($category_id));

            header('Location: ../views/topcategories.php');

        }else{
            echo "not your category ";
        }
    }else{
        echo "no category";
    }
}