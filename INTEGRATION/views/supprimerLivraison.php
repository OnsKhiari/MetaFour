<?php
include "../controller/livraisonC.php";
$livraisonC = new livraisonC();
if (isset($_GET['id'])) {
        $livraisonC->supprimerLivraison($_GET['id']);
       // echo 'c bn';
        header('Location:afficherLivraisons.php');

}else {
     header('Location:afficherLivraisons.php');
}