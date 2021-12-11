<?php
include '../model/config.php' ;
$pdo= config::getConnexion();

$getallcategories= $pdo->query(
'SELECT
category_id,
category_user,
category_date,
category_name
FROM category ORDER BY category_id DESC');

if(isset($_GET['search']) && !empty($_GET['search'])){

    $category_search=$_GET['search'];

    $getallcategories = $pdo->query(
        'SELECT
        category_id,
        category_user,
        category_date,
        category_name
        FROM category WHERE category_name
        LIKE "%'.$category_search.'%" ORDER BY category_id DESC'
    );
}
//**************************************************************************************** */
//***************************************SELECT CATEGORY */

if(isset($_POST['select'])){
    header('Location: ../views/addpost.php?category_id='.$_POST['select'].' ');
}