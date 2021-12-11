<?php
include '../config.php' ;
$pdo= config::getConnexion();

$getmyposts = $pdo->prepare(
    'SELECT post_id, post_description, post_user, post_username, post_categoryname
    FROM post ORDER BY post_id DESC');
    
$getmyposts->execute(array($_SESSION['user_id']));

//********************************************************************************* */
//***************************************** */
if(!empty($_GET['search']) && isset($_GET['Searchdone'])){
    
    $post_search=$_GET['search'];

    $getpost = $pdo->query(
        'SELECT * FROM post WHERE post_description
        LIKE "%'.$post_search.'%" ORDER BY post_id DESC'
    );
}




