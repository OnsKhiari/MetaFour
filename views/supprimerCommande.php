<?php
include "../controller/commandeC.php";
$commandeC = new commandeC();
if (isset($_GET['id'])) {
        $commandeC->supprimerCommande($_GET['id']);
        header('Location:afficherCommandes.php');

}else {
    header('Location:afficherCommandes.php');
}