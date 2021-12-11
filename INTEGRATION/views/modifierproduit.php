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
<!DOCTYPE html>
<html>

<head>
        <title>Back Dashboard</title>
        <link href='css\style1.css'
                rel='stylesheet' />
        <link rel="icon" type="image/png"
                href="assets\_images\1x\Asset 5.png" />
                <link rel="stylesheet" href="assets/css/ajouter.css">
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








