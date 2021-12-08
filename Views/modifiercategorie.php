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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorie</title>
    <link rel="stylesheet" href="assets\css\ajouter.css">
</head>

<body>
    <div class="retour">
                <button ><a href="afficherlistecategories.php">Retour à la liste des categories</a></button>
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

                <a href='categorieback.php'>
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
</div>
</body>

</html>