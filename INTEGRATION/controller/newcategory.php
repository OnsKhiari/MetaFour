<?php
include '../config.php';
$pdo= config::getConnexion();

if(isset($_POST['create'])){
    if( !empty($_POST['category_name'])){
        $category_name = htmlspecialchars($_POST['category_name']);
        $category_date = date('d/m/Y');
        $category_user=$_SESSION['user_id'];
        $category_username=$_SESSION['user_name'];

        $insertcategory = $pdo->prepare(
            'INSERT INTO category(
            category_name,
            category_date,
            category_user,
            category_username
            )
            VALUES (?, ?, ?,?)'
        );
        $insertcategory->execute(
            array(
            $category_name,
            $category_date,
            $category_user,
            $category_username
            )
        );

        $checkifcategoryexists= $pdo->prepare('SELECT * FROM category WHERE category_name = ?');
        $checkifcategoryexists->execute(array($category_name));
        $categoryInfos = $checkifcategoryexists->fetch();
        
        $_SESSION['category_id']=$categoryInfos['category_id'];
        $_SESSION['category_name']=$categoryInfos['category_name'];
        $_SESSION['category_date']=$categoryInfos['category_date'];
        $_SESSION['category_user']=$categoryInfos['category_user'];

        header('Location: topcategories.php');
        $success="category inserted";
    }else{
        $error="You need to insert a name";
    }
}