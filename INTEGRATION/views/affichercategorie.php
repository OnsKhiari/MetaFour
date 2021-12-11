<?php
	include '../Controller/categorieC.php';
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
?>
<!DOCTYPE html>
<html>

<head>
        <title>Back Dashboard</title>
        <link rel="icon" type="image/png"
                href="assets\_images\1x\Asset 5.png" />
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
        <a href="ajoutercategorie.php">
        <button class="form_input" id="ajouter_categ">Ajouter categorie</button></a>
        <br><br>
            <table class="req_list">
                <thead>
                    <tr>
                        <th>Nom_Categorie</th>  
                        <th>id_categorie</th>
                        <th>supprimer</th>
                        <th>modifier</th>
                    </tr>
                </thead>
                <?php
				foreach($listecategorie as $categorie){
			?>
                <tbody>
                    <tr>
                        <th><?php echo $categorie['nom_categorie']; ?></th>
                        <th><?php echo $categorie['id_categorie']; ?></th>
                        <td><button class="a_button" id='del'><a href="supprimercategorie.php?id_categorie=<?php echo $categorie['id_categorie']; ?>">Supprimer</a></button></td>
                        <td><button class="a_button" id='view'><a href="modifiercategorie.php?id_categorie=<?php echo $categorie['id_categorie']; ?>">modifier</a></button></td>
                        
                    </tr><br>
                <tbody>
                <?php
				}
			?>
            </table>
            
            
        </div>

        </div>

    </section>

</body>


</html>







    