<?php
include '../config.php' ;
$pdo= config::getConnexion();

$getcategory = $pdo->prepare(
    'SELECT category_id, category_name, category_user, category_username
    FROM category ORDER BY category_id DESC');
$getcategory->execute(array($_SESSION['user_id']));

//************************************************************************* */
//*************************************SEARCH CATEGORY  */

    
    if(!empty($_GET['search']) && isset($_GET['Searchdone'])){
    
        $category_search=$_GET['search'];
    
        $getcategory = $pdo->query(
            'SELECT
            category_id,
            category_user,
            category_date,
            category_name,
            category_username
            FROM category WHERE category_name
            LIKE "%'.$category_search.'%" ORDER BY category_id DESC'
        );
    }