<?php
	include_once '../Controller/produitC.php';
	include_once '../Controller/categorieC.php';
	
	$produitC=new ProduitC();
	$listeproduit=$produitC->afficherproduits();
	
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
	if(isset($_GET['recherche'])){
  $listeproduit=$produitC->afficherproduits($_GET['recherche']);}
  else{
  $listeproduit=$produitC->afficherproduits();}if (isset($_POST['tri'])) { 
	$listeproduit = $produitC->tri();}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>produits</title>
	<link rel="stylesheet" href="assets/css/style1.css">
	<link rel="icon" type="image/png" href="assets/img/logofinal.png" />
</head>

<body>
	<header>

		<nav>
			<div class="posit">

				<div class="dropdown">
					<a class="dropbtn" href="Shop.php">Produit</a>
					
					<div class="dropdown-content"><?php
				foreach($listecategorie as $categorie){
			?>
<a href="Ordinateur_portable.php?id_c=<?php echo $categorie['id_categorie'];?>"><?php echo $categorie['nom_categorie'];?></a>
<?php
				}
			?></div>
					
			</div>
			<a href="homepage.php">Forum</a>

			<a href="CoursesPage.php">courses</a>
			<a href="#">AboutUs</a>
		</div>
		<img class="sign" src="assets/img/sign.png" alt="Banner" width="50"><br>
		<div class="p">
			<span style='font-size:50px;'>&#9474;</span>

		</div>
		<div class="account">
			<a href="0login.php">MyAccount</a>
		</div>
		</nav>
		<div class="p1">
			<span style='font-size:50px;'>&#9474;</span>

		</div>
		<div id="logo">
			<a href="home.php">
				<img src="assets/img/logofinal.png" alt="Banner" width="76"><br></a>
			<strong>Meta four</strong>
		</div>

		<img src="assets/img/VENEZ NOUS EN PARLEZ AVANT QUE SA SOIT TROP TARD (1).png" alt="Banner" width="1500">
		<div id="chariotT">
			<a href="#">
				<img class="chariot" src="assets/img/chariot.png" alt="banner" width="40"></a>
		</div>
	</header>

	<section class="container">
		<div class="dropdowns"><form  method="post" action="shop.php">
			<div class="postri">
			<a class="btn btn-primary shop-item-filtrer">Sort</a>
			<div class="dropdowns-sort">
			
	<input type="submit" name="tri" value="trier" ></input>

				
			

			</div></form></div>
		</div>
		<h2><strong>Ordinateur Portable</strong></h2>
		<form method="post" action="chercher.php">
			
			<input id="rechercher" type="rechercher" name="rechercher" required>
			<span class="caret"></span>
		</form>

        <?php

$bdd = new PDO('mysql:host=localhost;dbname=produit;charset=utf8', 'root', '');


	$chercher = $_POST["rechercher"];
	$selection = $bdd->prepare("SELECT * FROM produit WHERE nom_produit like '%$chercher%'");               
	$selection->setFetchMode(PDO:: FETCH_OBJ);
	$selection -> execute();

	while($produit = $selection->fetch())
	{
		?>
		
        <div class="shop-items">
			<div class="shop-item">
     
				<a href="produit2.php?id_produit=<?php echo $produit->id_produit;?>">
					<img src="<?php echo  $produit->imageA; ?>"
						class="shop-item-image"><br>
                        <div class="shop-item-details">
						<strong class="shop-item-title"><?php echo  $produit->nom_produit; ?></strong>
						<br><div class="shop-item-details"></div>
						<span class="shop-item-price"><?php echo  $produit->prix; ?>Dt</span>
				</a><br>

				<a href="index.php"><button type="button" class="btn btn-primary shop-item-button">Ajouter</button></a>
		
                </div>
		</div>
		</div>
                                 
		
<?php 
	}	
		
?>
	
		
		

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<br>
		<a href="#"><img class="icon" src="assets/img/fleche.png" alt="0" width="70"></a>

	</section>

	<footer>

<div class="containerfooter left">
	<span>Get Started:<br></br> SIGN IN, </br> Membership offers,</br> shopping list</span>

</div>

<div class="containerfooter center">
<span>AboutUs:<br>
	<img src="assets/img/Facebook Logo.png">
	<img src="assets/img/insta.png" height="49"></span>
</div>

<div class="containerfooter right">
<img src="assets/img/logofinal.png" alt="Banner" width="76"><br>
			<span><strong>Meta_four</strong><br>
			<br><span>Copyright &copy; 2021 - Meta-Four</span></span>

</div>

</footer>
</body>

</html>