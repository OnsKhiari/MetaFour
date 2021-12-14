<?php
include '../config.php' ;
$pdo= config::getConnexion();

//****************************************************************************** */
//*********************************Acceder au post */

if(isset($_GET['post_id']) && !empty($_GET['post_id'])){

    $idofpost= $_GET['post_id'];
    $checkifpostexist= $pdo->prepare('SELECT * FROM post WHERE post_id=?');
    $checkifpostexist->execute(array($idofpost));

    if($checkifpostexist->rowCount() >0){

        $post_info= $checkifpostexist->fetch() ;
        $post_description=$post_info['post_description'];
        $post_user=$post_info['post_user'];
        $post_username=$post_info['post_username'];
        $post_category=$post_info['post_category'];
        $post_date=$post_info['post_date'];

    }

}

//************************************************************************** */
//***********************************COMMENT */

if(isset($_POST['commentpls'])){
    if(!empty($_POST['addcomment'])){

        $idofpost= $_GET['post_id'];

        $user_comment= htmlspecialchars($_POST['addcomment']);
        $insertcomment= $pdo->prepare(
        'INSERT INTO comment(
            comment_user,
            comment_username,
            comment_post,
            comment_content
        )
        VALUES (?,?,?,?)'
        );
        $insertcomment->execute(array($_SESSION['user_id'], $_SESSION['user_name'], $idofpost, $user_comment));
    
        //header('Location: ../views/post.php');
    
    }
}

//************************************************************************** */
//***********************************SHOW COMMENT */

$idofpost= $_GET['post_id'];
$getallcomments= $pdo->prepare('SELECT * FROM comment WHERE comment_post=?');
$getallcomments->execute(array($idofpost));
