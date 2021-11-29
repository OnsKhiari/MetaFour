<?php
include '../model/config.php' ;
$pdo= config::getConnexion();

if(isset($_POST['submit'])){
    if(!empty($_POST['user_name']) && !empty($_POST['user_pass'])){

        $user_name= htmlspecialchars($_POST['user_name']);
        $user_pass= htmlspecialchars($_POST['user_pass']);

        $checkifuserexists= $pdo->prepare('SELECT * FROM users WHERE user_name = ?');
        $checkifuserexists->execute(array($user_name));

        if($checkifuserexists->rowCount() >0){

            $userInfos = $checkifuserexists->fetch();

            if($user_pass == $userInfos['user_pass']){

                $_SESSION['auth'] = true;
                $_SESSION['user_name']=$userInfos['user_name'];
                $_SESSION['user_id']=$userInfos['user_id'];

                header('Location: ../views/homepage.php');

            }else{
                $error="password incorrect";
            }
        }else{
            $error="name incorrect";
        }
        
    }else{
        $error="wrong account";
    }
}
?>