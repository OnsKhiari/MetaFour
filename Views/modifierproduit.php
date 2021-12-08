<?php
     include '../Model/produit.php';
     include '../Controller/produitC.php';
 
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
    )
     {
       
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
  
            $produitC->modifierproduit($produit, $_GET["id_produit"]);
            header('Location:afficherproduits.php');
        }
        else
            $error = "Missing information";
    
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
    <link rel="stylesheet" href="assets\css\ajouter.css">
</head>

<body>
    <div class="retour">
                <button ><a href="afficherlisteproduits.php">Retour à la liste des produits</a></button>
       </div> <hr>
        
       
        
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

                <a href='Dashboard.php'>
                    <div class="item">
                        <h2 class="sidebar">Dashboard</h2>
                    </div>
                </a>

                <br>

                <h1 class="items">MANAGMENT</h1>
                <img class="line"
                    src='C:\Users\Wickkid\My Drive\2nd Year\1st Semester\Projet technologies WEB\Project\assets\_images\1x\Asset 7.png'>
                <br><br>

                <a href='produitback.php'>
                    <div class='item'>
                        <h2 class="sidebar">Porduits</h2>
                    </div>
                </a>



                <a href='#'>
                    <div class='item'>
                        <h2 class="sidebar">Courses</h2>
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
                        alt="admin">
                    </div>
            </div>

        
    </div>
   <section>
      <div class="form-style-5">
      <div id="error">
            <?php echo $error; ?>
        </div>
        <?php 

if (isset($_GET['id_produit']))
{ 

    $produit=$produitC->recupererproduit($_GET['id_produit']);
    ?>
        <form action="" method="POST">
            
            <fieldset >
            <input type="number"  name="id_c" value="<?php echo $produit["id_c"];?>"><br>
            <input type="text"  name="nom_produit" value="<?php echo $produit["nom_produit"];?>"><br>
            <input type="float"  name="prix"  value="<?php echo $produit["prix"];?>"><br>
            <input type="text"   name="stock"  value="<?php echo $produit["stock"];?>"><br>
            <input type="text"  name="imageA" multiple value="<?php echo $produit["imageA"];?>"><br>
            <input type="text" for="image2"  name="image2" value="<?php echo $produit["image2"];?>"><br>
            <input type="text" for="image3"  name="image3" value="<?php echo $produit["image3"];?>"><br>
            <textarea name="descriptionA" > <?php echo $produit["descriptionA"];?></textarea>
            </fieldset>
            <input type="submit" value="Apply" />
         
            </form>
            <?php
}
?>  
     
              </div>
   </section>
</div>
</body>

</html>