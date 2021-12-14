<?php
	include_once '../Controller/categorieC.php';
	

	
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
	if (isset($_POST['tri'])) { 
	$listeproduit = $produitC->tri();}

?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meta-Four</title>
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
			<?php	}
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
			<a href="home.php"><img hre src="assets/img/logofinal.png" alt="Banner" width="76"><br></a>
			<strong>Meta four</strong>
		</div>

	
	</header>


	<section class="container">
		<img src="assets/img/Perfection in motion (1).png" alt="Banner" width="1688"
			height="600">
			<div class="wrap">
				<a href="Shop.php"><button class="buttonc">Shop Now</button></a>
			</div>
			<div class="wrap">
				<a href="CoursesPage.php"><button class="buttonc2">Get Started</button></a>
			</div>
			<img src="assets/img/Un plan marketing est un document ou un plan contenant les objectifs de publicité et de marketing d'une entreprise.png" alt="Banner" width="1688"
			height="600">
			<img src="assets/img/Take part in our coding courses available now.png" alt="Banner" width="1688"
			height="600">
			
	</section>
	<footer>

	<div class="containerfooter left">
		<span>Get Started:<br></br> SIGN IN, </br> Membership offers,</br> shopping list</span>
	
	</div>

	<div class="containerfooter center">
	<span>AboutUs:<br>
		<img src="assets/img/Facebook Logo.png" height="40">
		<img src="assets/img/insta.png" height="49"></span>
	</div>

	<div class="containerfooter right">
	<span><img src="assets/img/logofinal.png" alt="Banner" width="76"><br>
				<strong>Meta_four</strong><br>
				<br><span>Copyright &copy; 2021 - Meta-Four</span></span>

	</div>

</footer>
</body>

</html>