<?php
	include_once '../Controller/produitC.php';
	include_once '../Controller/categorieC.php';
	
	$produitC=new ProduitC();
	$listeproduit=$produitC->afficherproduits();
	
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
	if (isset($_POST['tri'])) { 
	$listeproduit = $produitC->tri();}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>produits</title>
	<link rel="stylesheet" href="assets/css/produit.css">

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
				<a href="#">Forum</a>

				<a href="#">courses</a>
				<a href="#">AboutUs</a>
			</div>
			<img class="sign" src="assets/img/sign.png" alt="Banner" width="50"><br>
			<div class="p">
				<span style='font-size:50px;'>&#9474;</span>

			</div>
			<div class="account">
				<a href="Dashboard.html">MyAccount</a>
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

		
		<div id="chariotT">
			<a href="#">
				<img class="chariot" src="assets/img/chariot.png" alt="banner" width="40"></a>
		</div>
	</header>
	<section>
	<?php
        $bdd = new PDO('mysql:host=localhost;dbname=produit;charset=utf8', 'root', '');
        $selection = $bdd->prepare('SELECT * FROM produit WHERE id_produit = ?');
        $selection->execute(array($_GET['id_produit']));
        $produit = $selection->fetch();
?>

<div class="gallery cf">

<h1><?php echo $produit['nom_produit']; ?></h1>

  <div>
    <img src="<?php echo $produit['imageA']; ?>" />
  </div>
  <div>
    <img src="<?php echo $produit['image2']; ?>" />
  </div>
  <div>
    <img src="<?php echo $produit['image3']; ?>" />
  </div>
  <div>
 <h3><?php echo $produit['descriptionA']; ?></h3></div>
</div>
			<br>
			<br>	
			<button class="buttonC">ajouter au panier</button>
	</section>
	<footer>
		<div class="fotter">
			<address> <strong> Get Started: </strong><a href="" class="text-down"> </br> SIGN IN, </br> Membership
					offers,</br> shopping list</address></a>
			<br>
			<address> <strong>AboutUs:</strong> <a href="" class="text-down"> <br>OUR TEAM,</br> OUR PROJECTS,</br> FAQ
			</address></a>


			<ul class="nav">

				<li>
					<a class="pg" href="https://www.facebook.com" target="_blank"><img
							src="assets/img/Facebook Logo.png"></a>
				</li>
				<li>
					<a class="pg1" href="https://www.instagram.com" target="_blank"><img src="assets/img/insta.png"
							height="49"></a>
				</li>
				<div class="credit">
					<a>Copyright &copy; 2021 - Meta-Four</a>
					<div class="cant">
						<a> Cantact Us: </a>
					</div>
			</ul>

			<div id="logof">
				<img src="assets/img/logofinal.png" alt="Banner" width="76"><br>

			</div>

			<div id="logof">
				<img src="assets/img/logofinal.png" alt="Banner" width="76"><br>
				<strong>Meta_four</strong>
			</div>
			<p><strong>communication:</strong> <a href="" class="text-down"> <br>FORUM</br> DEVELOPPRES </address></a>
			</p>
		</div>
	</footer>
</body>

</html>