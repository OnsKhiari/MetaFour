<?php
include '../model/config.php';
$pdo= config::getConnexion();


if(isset($_POST['create'])){
    if( !empty($_POST['post_description'])){
        $post_description = htmlspecialchars($_POST['post_description']);
        $post_date = date('d/m/Y');
        $post_user=$_SESSION['user_id'];
        $post_category=$_GET['category_id'];
        $post_username=$_SESSION['user_name'];


        //pls dont judge idk what i'm doing either // by me and yassine khemiri
        $sql="SELECT * FROM category WHERE category_id=$post_category";
        $post_categoryname= $pdo->prepare($sql);
        $post_categoryname->execute();
        $ii=$post_categoryname->fetch();
        $nameb=$ii['category_name'];
        //**************************lmao*/

        $insertpost = $pdo->prepare(
            'INSERT INTO post(
            post_category,
            post_date,
            post_user,
            post_description,
            post_username,
            post_categoryname
            )
            VALUES (?, ?, ?, ?, ?, ?)'
        );
        $insertpost->execute(
            array(
            $post_category,
            $post_date,
            $post_user,
            $post_description,
            $post_username,
            $nameb
            )
        );
        header('Location: homepage.php');
        $success="inserted in your profile";
    }else{
        $error="Post is empty";
    }
}
// if(isset($_POST['create'])){
    
//     if(!empty($_POST['selectcategory']) && !empty($_POST['text1'])){
//         //code..
//     }else if(empty($_POST['selectcategory'])){
//         $error="Select Category";
//     }elseif(empty($_POST['text1'])){
//         $error="Post is empty";
//     }else{
//         $error="Post is empty and Category is not selected";
//     }
// }