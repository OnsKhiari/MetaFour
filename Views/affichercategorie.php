<?php
	include '../Controller/categorieC.php';
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/ajouter.css">
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
                        <td><button><a href="supprimercategorie.php?id_categorie=<?php echo $categorie['id_categorie']; ?>">Supprimer</a></button></td>
                        <td><button><a href="modifiercategorie.php?id_categorie=<?php echo $categorie['id_categorie']; ?>">modifier</a></button></td>
                        
                    </tr><br>
                <tbody>
                <?php
				}
			?>
            </table>
            <a href="ajoutercategorie.php">
            <button class="buttonAC">Ajouter categorie</button></a>
        </div>

        </div>

    </section>

</body>

</html>