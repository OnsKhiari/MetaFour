<?php
include '../config.php' ;
$pdo= config::getConnexion();


if(isset($_GET['post_id']) && !empty($_GET['post_id'])){
    $post_id= $_GET['post_id'];

    $checkifpostexists= $pdo->prepare('SELECT * FROM post WHERE post_id=?');
    $checkifpostexists->execute(array($post_id));

    if($checkifpostexists->rowCount() >0 ){

        $postinfo= $checkifpostexists->fetch();
        if($postinfo['post_user']==$_SESSION['user_id']){
            
            $description=$postinfo['post_description'];
            $datepost=$postinfo['post_date'];
        }else{
            $error="mahech l post mte3k bch tbadalha";
        }

    }else{
        $error="no post found";
    }

}
//******************************************************************************/
//***********************DONE ACTION MODIFY */

if(isset($_POST['donemodif'])){
    if(!empty($_POST['post_description'])){

        $error="hjjk";
        $post_id= $_GET['post_id'];
        $newpostdescription= htmlspecialchars($_POST['post_description']);

        $editpost= $pdo->prepare('UPDATE post SET post_description=? WHERE post_id=?');
        $editpost->execute(array($newpostdescription,$post_id));

        header('Location: ../views/homepage.php');

    }else{
        $error="malyzmkch t5aleha fergha";
    }
}