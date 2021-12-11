<?php
	class Produit{
        private $id_produit=null;
		private $id_c=null;
		private $nom_produit=null;
		private $prix=null;
		private $stock=null;
		private $imageA=null;
        private $image2=null;
        private $image3=null;
		private $descriptionA;
		
		private $password=null;
		function __construct($id_c,$nom_produit, $stock,$prix,$imageA,$image2,$image3,$descriptionA){
			$this->id_c=$id_c;
			$this->nom_produit=$nom_produit;
			$this->prix=$prix;
			$this->stock=$stock;
            $this->imageA=$imageA;
            $this->image2=$image2;
            $this->image3=$image3;
			$this->descriptionA=$descriptionA;
		}
		function getid_produit(){
			return $this->id_produit;
		}
		function getid_c(){
			return $this->id_c;
		}
		function getnom_produit(){
			return $this->nom_produit;
		}
		function getprix(){
			return $this->prix;
		}
		function getstock(){
			return $this->stock;
		}
        function getimageA(){
			return $this->imageA;
		}
        function getimage2(){
			return $this->image2;
		}
        function getimage3(){
			return $this->image3;
		}
		function getdescriptionA(){
			return $this->descriptionA;
		}
		function setid_c(string $id_c){
			$this->id_c=$id_c;
		}
		function setnom_produit(string $nom_produit){
			$this->nom_produit=$nom_produit;
		}
		function setprix(string $prix){
			$this->prix=$prix;
		}
		function setstock(string $stock){
			$this->stock=$stock;
		}
        function setimageA(string $imageA){
			$this->imageA=$imageA;
		}
        function setimage2(string $image2){
			$this->image2=$image2;
		}
        function setimage3(string $image3){
			$this->image3=$image3;
		}
		function setdescriptionA(string $descriptionA){
			$this->descriptionA=$descriptionA;
		}
		
	}


?>