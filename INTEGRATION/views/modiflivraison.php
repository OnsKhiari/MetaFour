<?php
require '../model/livraison.php';
require '../controller/livraisonC.php';
if (
    isset($_POST['livraison']) &&
    isset($_POST['id']) 
) {
    # code...
    $livraison = new livraison(0,$_POST['livraison']);
    $livraisonC = new livraisonC();
    $livraisonC->modifierlivraison($livraison,$_POST['id']);
    header('Location: afficherLivraisons.php');
}else {
    echo 'chyy';
}