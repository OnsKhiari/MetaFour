<?php
include "../controller/livraisonC.php";
$livraisonC = new livraisonC();
if (isset($_GET['id'])) {
        $livraisonC->supprimerLivraison($_GET['id']);
       // echo 'c bn';
        header('Location:back2.php');

}else {
     header('Location:back2.php');
}