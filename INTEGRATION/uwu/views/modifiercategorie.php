<?php
     include '../Model/categorie.php';
     include '../Controller/categorieC.php';
 
     $error = "";
 
 
     $categorie = null;
 
  
     $categorieC = new CategorieC();
    
    if (
        isset($_POST["nom_categorie"]) 
	
    )
     {
       
$categorie = new Categorie(
                $_POST['nom_categorie']

            );
  
            $categorieC->modifiercategorie($categorie, $_GET["id_categorie"]);
            header('Location:affichercategorie.php');
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
        <section>
      <div class="form-style-5">
      <div id="error">
            <?php echo $error; ?>
        </div>
        <?php 

if (isset($_GET['id_categorie']))
{ 

    $categorie=$categorieC->recuperercategorie($_GET['id_categorie']);
    ?>
        <form action="" method="POST">
            
            <fieldset >
            <input type="text"  name="nom_categorie" value="<?php echo $categorie["nom_categorie"];?>"><br>
            </fieldset>
            <input type="submit" value="Apply" />
         
            </form>
            <?php
}
?>  
     
              </div>
   </section>

</body>


</html>







