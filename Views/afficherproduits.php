<?php
	include '../Controller/produitC.php';
	$produitC=new ProduitC();
	$listeproduit=$produitC->afficherproduits(); 
    $listeproduit = $produitC->tri();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/ajouterAFP.css">
</head>

<body>
<div class='menu' ; style="display:block" ;>
    <div class='Logo' ;>
                        <span class="img"><img
                                        src="C:\Users\Wickkid\My Drive\2nd Year\1st Semester\Projet technologies WEB\Project\assets\_images\1x\Asset 5.png"
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
                                        src='C:\Users\Wickkid\My Drive\2nd Year\1st Semester\Projet technologies WEB\Project\assets\_images\1x\Asset 7.png'>
                                <br><br>

                                <a href='Dashboard.html'>
                                        <div class="item">
                                                <h2 class="sidebar">Dashboard</h2>
                                        </div>
                                </a>

                                <br>

                                <h1 class="items">MANAGMENT</h1>
                                <img class="line"
                                        src='C:\Users\Wickkid\My Drive\2nd Year\1st Semester\Projet technologies WEB\Project\assets\_images\1x\Asset 7.png'>
                                <br><br>

                                <a href='produit.php'>
                                        <div class='item'>
                                                <h2 class="sidebar">Produit</h2>
                                        </div>
                                </a>



                                <a href='#'>
                                        <div class='item'>
                                                <h2 class="sidebar">Course</h2>
                                        </div>
                                </a>

                                <a href='#'>
                                        <div class='item'>
                                                <h2 class="sidebar">Delete Course</h2>
                                        </div>
                                </a>

                                <a href='#'>
                                        <div class='item'>
                                                <h2 class="sidebar">Income</h2>
                                        </div>
                                </a>

                        </div>
                        <div class="profile">
                                <h1>Logged in as:</h1>
                                <div class="profile_id">
                                        <a href="#">
                                                <h2>Jmai Mohamed</h2>
                                        </a>
                                </div>
                                <div class="profile_frame" ; style="display:block" ;><img
                                                src="assets\img\mohamed.jpg"
                                                alt="admin"></div>
                        </div>

                </div>
    </div>
    <section>
        <div class="table-wrapper">
            <table class="fl-table" border="3">
                <thead>
                    <tr>
                        <th>id_Categorie</th>
                        <th>Nom_Produit</th>
                        <th>prix </th0>
                        <th>stock</th>  
                        <th>image</th> 
                        <th>image2</th> 
                        <th>image3</th> 
                        <th>description</th>   
                        <th>supprimer</th>
                        <th>modifier</th>
                    </tr>
                </thead>
                <?php
				foreach($listeproduit as $produit){
			?>
                <tbody>
                    <tr>
                        <th><?php echo $produit['id_c']; ?></th>
                        <td><?php echo $produit['nom_produit']; ?></td>
                        <td><?php echo $produit['prix']; ?></td>
                        <td><?php echo $produit['stock']; ?></td>
                        <td><?php echo $produit['imageA']; ?></td>
                        <td><?php echo $produit['image2']; ?></td>
                        <td><?php echo $produit['image3']; ?></td>
                        <td><?php echo $produit['descriptionA']; ?></td>
                        <td><button><a href="suprimerproduit.php?id_produit=<?php echo $produit['id_produit']; ?>">Supprimer</a></button></td>
                        <td><button><a href="modifierproduit.php?id_produit=<?php echo $produit['id_produit']; ?>">modifier</a></button></td>
                        
                    </tr><br>
                <tbody>
                <?php
				}
			?>
            </table>
            
        </div>

        </div><a href="ajouterproduit.php">
            <button class="buttonC">Ajouter produit</button></a>

    </section>
   
</body>

</html>