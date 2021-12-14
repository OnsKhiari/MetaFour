<?php
    include '../Model/produit.php';
    include '../Controller/produitC.php';
    include_once '../Controller/categorieC.php';
    $categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
    $error = "";


    $produit = null;

 
    $produitC = new ProduitC();
    if (
        isset($_POST["id_c"]) &&
		isset($_POST["nom_produit"]) &&		
        isset($_POST["prix"]) &&
		isset($_POST["stock"]) && 
        isset($_POST["imageA"]) && 
        isset($_POST["image2"]) && 
        isset($_POST["image3"]) && 
        isset($_POST["descriptionA"])
    ) {
        if (
            !empty($_POST["id_c"]) &&
		!empty($_POST["nom_produit"]) &&		
        !empty($_POST["prix"]) &&
		!empty($_POST["stock"]) && 
        !empty($_POST["imageA"]) && 
        !empty($_POST["image2"]) && 
        !empty($_POST["image3"]) && 
        !empty($_POST["descriptionA"])
        ) {
            $produit = new Produit(
                $_POST['id_c'],
		$_POST['nom_produit'],		
        $_POST['prix'],
		$_POST['stock'], 
        $_POST['imageA'], 
        $_POST['image2'], 
        $_POST['image3'], 
        $_POST['descriptionA']
            );
            $produitC->ajouterproduit($produit);
            header('Location:afficherproduits.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/ajouterAP.css">
    <link href='css\style1.css'
                rel='stylesheet' />
        <link rel="icon" type="image/png"
                href="assets\_images\1x\Asset 5.png" />
                <link href='css\PendingRequests.css'
        rel='stylesheet' />
        <link href='css\form.css' rel='stylesheet' />
</head>

<body>
        </div>
        <div class='menu' ; style="display:block" ;>
                <div class='Logo' ;>
                        <span class="img"><img
                                        src="assets\_images\1x\Asset 5.png"
                                        alt="Meta-Four"></span>
                        <span class="text">
                                <h1>Meta-Four</h1>
                                <h2>The source for computing and technology.</h2>
                        </span>
                </div>

                <div class='sidebar' id="Sidebar">
                        <br>
                        <div class='items'>


                                <h1 class='items'>CORE</h1>
                                <img class="line"
                                        src='assets\_images\1x\Asset 7.png'>
                                <br>

                                <a href='DashboardA.php'>
                                        <div class="item">
                                                <h2 class="sidebar">Dashboard</h2>
                                        </div>
                                </a>

                                <br>

                                <h1 class="items">MANAGMENT</h1>
                                <img class="line"
                                        src='assets\_images\1x\Asset 7.png'>
                                <br>

                                <a href='CoursesA.php'>
                                        <div class='item'>
                                                <h2 class="sidebar">Courses</h2>
                                        </div>
                                </a>



                                <a href='PendingRequestsA.php'>
                                        <div class='item'>
                                                <h2 class="sidebar">Pending Requests</h2>
                                        </div>
                                </a>

                                <a href='produit.php'>
                                        <div class='item'>
                                                <h2 class="sidebar">Products</h2>
                                        </div>
                                </a>


                        </div>
                        <div class="profile">
                                <h1>Logged in as:</h1>
                                <div class="profile_id">
                                        <a href="#">
                                                <h2>Yassine Derbel</h2>
                                        </a>
                                </div>
                                <div class="profile_frame" ; style="display:block" ;><img
                                                src="assets\_images\173202743_317772673290089_3203947986760422234_n.jpg"
                                                alt="admin"></div>
                        </div>
                </div>
        </div>
        <div class='content' id='content'>
        <section>
    <table class="fl-table" >
        <p><strong>choose right ID you want</strong></p>
                <thead>
                    <tr>
                        <th>Nom_Categorie</th>  
                        <th>id_categorie</th>
                        
                    </tr>
                </thead>
                <?php
				foreach($listecategorie as $categorie){
			?>
                <tbody>
                    <tr>
                        <th><?php echo $categorie['nom_categorie']; ?></th>
                        <th><?php echo $categorie['id_categorie']; ?></th>
                        
                        
                    </tr><br>
                <tbody>
                <?php
				}
			?>
            </table>
    <div id="error">
            <?php echo $error; ?>
        </div>
        <div class="form-style-5">
            <form action="" method="POST">
            <fieldset >
                
            <input type="text" name="id_c" id="id_c" placeholder="id_c *"><br>
            <p id="errorid_c"></p>
            <input type="text" name="nom_produit" id="nom_produit" placeholder="Nom_produit *"><br>
            <p id="errornom_produit"></p>
            <input type="text" name="stock"  id="prix" placeholder="en dinart"><br>
            <p id="errorprix"></p>
            <input type="float" name="prix"  id="stock" placeholder="Stock choisir (Oui ou Non)"><br>
            <p id="errorstock"></p>
            <input type="text" name="imageA" id="imageA" placeholder="mettre path de l'image"><br>
            <p id="errorimageA"></p>
            <input type="text" name="image2" id="image2" placeholder="mettre path de l'image2"><br>
            <p id="errorimage2"></p>
            <input type="text" name="image3" id="image3" placeholder="mettre path de l'image3"><br>
            <p id="errorimage3"></p>
            <textarea name="descriptionA" id="descriptionA" placeholder="descrption du composant" ></textarea>
            <p id="errordescriptionA"></p>
            </fieldset>
            <input type="submit" value="Apply" />
            <input type="reset" value="tout enlever"><br>    
        </form>
        <script src="cs.js"> </script>
            </div>

    </section>
        </div>

</body>

</html>




