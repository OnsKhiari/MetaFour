<?php
include '../model/config.php' ;
$pdo= config::getConnexion();

$getmyposts = $pdo->prepare(
    'SELECT post_id, post_description, post_user, post_username, post_categoryname
    FROM post ORDER BY post_id DESC');
    
$getmyposts->execute(array($_SESSION['user_id']));




