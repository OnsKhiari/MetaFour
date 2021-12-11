<?php
include '../model/config.php' ;
$pdo= config::getConnexion();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    $idofuser= $_SESSION['user_id'];

    $checkifuserexist= $pdo->prepare('SELECT * FROM users WHERE user_id=?');
    $checkifuserexist->execute(array($idofuser));

    if($checkifuserexist->rowCount() >0){

        $userinfos=$checkifuserexist->fetch();
        $user_name=$userinfos['user_name'];
        $user_id=$userinfos['user_id'];

        $getpostsofuser=$pdo->prepare('SELECT * FROM post WHERE post_user=?');
        $getpostsofuser->execute(array($idofuser));

    }else{
        echo"no utilisateur";
    }

}else{
  echo "user not found";
}