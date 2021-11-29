<?php
include '../model/config.php' ;
$pdo= config::getConnexion();

if(isset($_GET['t'],$_GET['post_id'])){

    $getpostid= $_GET['post_id'];
    $gett= $_GET['t'];
    $user_id= $_SESSION['user_id'] ;

    $check=$pdo->prepare('SELECT post_id FROM post WHERE post_id=?');
    $check->execute(array($getpostid));

    if($check->rowCount() >0){
        //ken nzel 3al like
        if($gett == 1){
            $check_like= $pdo->prepare('SELECT like_id FROM likes WHERE like_postid = ? AND like_userid = ?');
            $check_like->execute(array($getpostid,$user_id));

            $deletedislike= $pdo->prepare('DELETE FROM dislikes WHERE dislike_postid = ? AND dislike_userid = ?');
            $deletedislike->execute(array($getpostid,$user_id));

            if($check_like->rowCount() >0){
                //ken 3mal like yfase5
                $deletelike= $pdo->prepare('DELETE FROM likes WHERE like_postid = ? AND like_userid = ?');
                $deletelike->execute(array($getpostid,$user_id));
            }else{
                //ken ma3mlch tet7at like
                $ins=$pdo->prepare('INSERT INTO likes (like_postid, like_userid) VALUES (?, ?)');
                $ins->execute(array($getpostid,$user_id));
            }


        //ken nzelt 3al dislike
        }else if ($gett == 2){
            $check_dislike= $pdo->prepare('SELECT dislike_id FROM dislikes WHERE dislike_postid = ? AND dislike_userid = ?');
            $check_dislike->execute(array($getpostid,$user_id));

            $deletelike= $pdo->prepare('DELETE FROM likes WHERE like_postid = ? AND like_userid = ?');
            $deletelike->execute(array($getpostid,$user_id));

            if($check_dislike->rowCount() >0){
                //ken 3mal dislike yfase5
                $deletedislike= $pdo->prepare('DELETE FROM dislikes WHERE dislike_postid = ? AND dislike_userid = ?');
                $deletedislike->execute(array($getpostid,$user_id));
            }else{
                //ken ma3mlch tet7at dislike
                $ins=$pdo->prepare('INSERT INTO dislikes (dislike_postid, dislike_userid) VALUES (?, ?)');
                $ins->execute(array($getpostid,$user_id));
            }
        }
        header('Location: ../views/homepage.php');
    }else{
        echo "erreur";
    }
}else{
    echo "er UWU le ";
}