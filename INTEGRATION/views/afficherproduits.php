<?php
	include '../Controller/produitC.php';
	$produitC=new ProduitC();
	$listeproduit=$produitC->afficherproduits(); 
    $listeproduit = $produitC->tri();
?>

<!DOCTYPE html>
<html>

<head>
        <title>Back Dashboard</title>
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

                                <a href='#'>
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
        <div class="table-wrapper">
        </div><a href="ajouterproduit.php">
            <button class="form_input" id="ajouter_categ">Ajouter produit</button></a>
            <table class="req_list" id="produits">
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
				foreach($listeproduit as $produit){
			?>
                <tbody>
                    <tr>
                        <td><?php echo $produit['id_c']; ?></td>
                        <td><?php echo $produit['nom_produit']; ?></td>
                        <td><?php echo $produit['prix']; ?></td>
                        <td><?php echo $produit['stock']; ?></td>
                        <td><?php echo $produit['imageA']; ?></td>
                        <td><?php echo $produit['image2']; ?></td>
                        <td><?php echo $produit['image3']; ?></td>
                        <td><?php echo $produit['descriptionA']; ?></td>
                        <td><button class="a_button" id='del'><a href="suprimerproduit.php?id_produit=<?php echo $produit['id_produit']; ?>">Supprimer</a></button>
                      <br><button class="a_button" id='view'><a href="modifierproduit.php?id_produit=<?php echo $produit['id_produit']; ?>">modifier</a></button></td>
                        
                    </tr><br>
                <tbody>
                <?php
				}
			?>
            </table>
            
     



    </section>
    </div>

</body>


</html>









