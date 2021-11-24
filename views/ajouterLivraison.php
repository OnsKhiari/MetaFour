<?php
require '../model/livraison.php';
require '../controller/livraisonC.php';
if (
    isset($_POST['id']) &&
    isset($_POST['livraison']) 
) {
    # code...
    $livraison = new livraison($_POST['id'],$_POST['livraison']);
    $livraisonC = new livraisonC();
    $livraisonC->ajouterLivraison($livraison);
    header('Location: afficherLivraisons.php');
}else {
    echo 'chyy';
}