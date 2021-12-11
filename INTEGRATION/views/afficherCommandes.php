<?php
	include '../controller/commandeC.php';
	$commandeC=new commandeC();
	$listeCommandes=$commandeC->afficherCommandes(); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Meta_Four </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Meta_Four</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#livraison">livraison</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Notre association</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">formulaire</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                
              
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">LIVRAISON A DOMOCILE</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <img src="logo1.png" width="180" height="180" alt=""/>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">C'est un site web pour faire des commandes en ligne de téléphones .</p>
            </div>
        </header>
        
        
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">LISTE DES COMMANDES :</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="ajouterCommande.php" method="post">
						<html>
<head>
        

    </head>
	<body>
	    <button><a href="index.php">Ajouter une commande</a></button>
		
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>code_article</th>
				<th>Email</th>
				<th>numero</th>
				<th>msg</th>
                <th>prix</th>
				<th>modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeCommandes as $commande){
			?>
			<tr>
				<td><?php echo $commande['id']; ?></td>
				<td><?php echo $commande['nom']; ?></td>
				<td><?php echo $commande['prenom']; ?></td>
				<td><?php echo $commande['code_article']; ?></td>
				<td><?php echo $commande['email']; ?></td>
				<td><?php echo $commande['num']; ?></td>
                <td><?php echo $commande['msg']; ?></td>
                <td><?php echo $commande['prix']; ?></td>
				<td>
					<form method="POST" action="modifierCommande.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $commande['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="supprimerCommande.php?id=<?php echo $commande['id']; ?>">Supprimer</a>
				</td>
                <td>
					<a href="livraison.php?id=<?php echo $commande['id']; ?>">livraison</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localisation</h4>
                        <p class="lead mb-0">
                            esprit:ecole sup privée d'ingenieurie et technologie
                            <br />
                            ariana soghra..
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">vous pouvez nous suivre sur </h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Pour plus d'informations vous pouvez contacter </h4>
                        <p class="lead mb-0">
                            
                            <a href="https://www.facebook.com/emna.mouissi.9/">emna mouissi </a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
       