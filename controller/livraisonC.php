<?php
include "../config.php";
require_once '../model/livraison.php';


class livraisonC{

    function ajouterLivraison($livraison){
        $sql="INSERT INTO livraison (type ,id_commande) 
        VALUES ( :type, :id_commande )";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'type' => $livraison->gettype(),
                'id_commande' => $livraison->getid_commande()

            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }


    function afficherLivraison(){
			
        $sql="SELECT * FROM livraison ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function supprimerLivraison($id){
        $sql="DELETE FROM livraison WHERE idlivraison= :idlivraison";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idlivraison',$id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }


    function modifierlivraison($livraison,$idlivraison){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE livraison SET 
                     type = :type
                    
                WHERE idlivraison = :idlivraison'
            );
            $query->execute([
                'type' => $livraison->gettype(),
                'idlivraison' => $idlivraison
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


}




?>