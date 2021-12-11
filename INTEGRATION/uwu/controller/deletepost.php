<?php
include '../model/config.php' ;
$pdo= config::getConnexion();

if(!isset($_SESSION['auth'])){
    header('Location: ../views/0login.php');
}

if(isset($_GET['post_id']) && !empty($_GET['post_id'])){

    $post_id= $_GET['post_id'];

    $checkifpostexists= $pdo->prepare('SELECT post_user FROM post WHERE post_id=?');
    $checkifpostexists->execute(array($post_id));

    if($checkifpostexists->rowCount() >0 ){

        $user_info= $checkifpostexists->fetch();
        if($user_info['post_user'] == $_SESSION['user_id']){

            $deletepost = $pdo->prepare('DELETE FROM post WHERE post_id=?');
            $deletepost->execute(array($post_id));

            header('Location: ../views/homepage.php');

        }else{
            echo "not your post bech tfasa5ha";
        }
    }else{
        echo "no post";
    }
}