<?php
	include_once '../config.php';
	include '../Model/categorie.php';
	include_once '../Model/produit.php';
	include '../Controller/categorieC.php';
	class ProduitC {
		function afficherproduits(){
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherPor()
		{
			$sql="SELECT * FROM produit where id_c like '22'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e)
			{
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerproduit($id_produit){
			$sql="DELETE FROM produit WHERE id_produit=:id_produit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_produit', $id_produit);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterproduit($produit){
			$sql="INSERT INTO produit (id_c, nom_produit,prix,stock,imageA,image2,image3,descriptionA) 
			VALUES (:id_c,:nom_produit,:prix,:stock,:imageA,:image2,:image3,:descriptionA)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_c' => $produit->getid_c(),
					'nom_produit' => $produit->getnom_produit(),
					'prix' => $produit->getprix(),
					'stock' => $produit->getstock(),
					'imageA' => $produit->getimageA(),
                    'image2' => $produit->getimage2(),
                    'image3' => $produit->getimage3(),
					'descriptionA' => $produit->getdescriptionA()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererproduit($id_produit){
			$sql="SELECT * from produit where id_produit=$id_produit";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierproduit($produit, $id_produit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
                        id_c= :id_c,
						nom_produit= :nom_produit,
						prix= :prix, 
						stock= :stock, 
                        imageA= :imageA,
                        image2= :image2,
                        image3= :image3,
						descriptionA= :descriptionA
					WHERE id_produit= :id_produit'
				);
				$query->execute([
					'id_c' => $produit->getid_c(),
					'nom_produit' => $produit->getnom_produit(),
					'prix' => $produit->getprix(),
					'stock' => $produit->getstock(),
					'imageA' => $produit->getimageA(),
                    'image2' => $produit->getimage2(),
                    'image3' => $produit->getimage3(),
					'descriptionA' => $produit->getdescriptionA(),
					'id_produit' => $id_produit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function tri()
		{
			$sql= "SELECT * from produit ORDER BY nom_produit";
			$db= config::getConnexion();
			try{
				$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function triS()
		{
			$sql="SELECT * FROM produit where stock like 'oui' ";
			$db =config::getConnexion();
			try{
			 $list=$db->query($sql);
			 return $list;
			}
			  catch (Exception $e)
		 { die('Erreur:'.$e->getMessage());}
		}
	}
?>