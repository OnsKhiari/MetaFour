<?php
	error_reporting(0);
    ini_set('display_errors', 0);
	include_once '../Controller/categorieC.php';
	

	
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
	if (isset($_POST['tri'])) { 
	$listeproduit = $produitC->tri();}

include_once '..\Controller\courseC.php';
$CourseC = new CourseC();
if(isset($_POST['sort']))
{
    $req_list = $CourseC->showcoursePSearched("Data Science", $_GET['searched'],$_POST['sort']);
}
else
{
    $req_list = $CourseC->showcoursePSearched("Data Science", $_GET['searched'],'course_id ASC');
}

?>
<html>

<head>
    <title>Data Science</title>
    <link href='css\LandingPage.css' rel='stylesheet' />
    <link href='css\WebDev.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="assets\_images\1x\Asset 5.png" />
    <link href='css\form.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
<header>

<nav>
    <div class="posit">

    <div class="dropdown">
            <a class="dropbtn" href="Shop.php">Produit</a>
            
            <div class="dropdown-content"><?php
        foreach($listecategorie as $categorie){
    ?>
<a href="Ordinateur_portable.php?id_c=<?php echo $categorie['id_categorie'];?>"><?php echo $categorie['nom_categorie'];?></a>
    <?php	}
    ?></div>
            
        </div>
        <a href="homepage.php">Forum</a>

        <a href="CoursesPage.php">courses</a>
        <a href="#">AboutUs</a>
    </div>
    <img class="sign" src="assets/img/sign.png" alt="Banner" width="50"><br>
    <div class="p">
        <span style='font-size:50px;'>&#9474;</span>

    </div>
    <div class="account">
        <a href="Dashboard.html">MyAccount</a>
    </div>
</nav>
<div class="p1">
    <span style='font-size:50px;'>&#9474;</span>

</div>
<div id="logo">
    <a href="home.php"><img hre src="assets/img/logofinal.png" alt="Banner" width="76"><br></a>
    <strong>Meta four</strong>
</div>


</header>
    <div id='title'>
        <h>Data Science</h>
    </div>
    <div class='search_div'>
        <form action="" method="GET" class="form1" id='form'>
            <div class="grid1"><input class="form_input" type="text" placeholder="Search Here ..." name="searched">
                <button class="form_input" type="submit" id="submit_butt1"> <span class='search_b'>SEARCH<i class="material-icons">search</i></span></button>
            </div>
        </form>



        <div class="grid3">
            <form action="" method="POST">
                <select name="sort" id="sort" class="select1" placeholder="Related Course" onchange="this.form.submit();">
                    <option value="">Sort By...</option>
                    <optgroup label=" Price">
                        <option value="course_price ASC">Ascending</option>
                        <option value="course_price DESC">Descending</option>
                    </optgroup>
                    <optgroup label="Duration">
                        <option value="course_duration ASC">Ascending</option>
                        <option value="course_duration DESC">Descending</option>
                    </optgroup>
                    <optgroup label="Course Title (Alphabetical)">
                        <option value="course_title ASC">Ascending</option>
                        <option value="course_title DESC">Descending</option>
                    </optgroup>
                </select>
            </form>
        </div>

    </div>
    <div class="courses_container">
        <?php
        foreach ($req_list as $course) {
        ?>
            <div class="Course">
                <a class='course_link' href="showlessons.php?id=<?php echo $course['course_id']; ?>">
                    <img src="<?php echo $course['thumbnail'] ?>" alt="thumbnail">

                    <div class="title_area">
                        <span class="title">
                            <p><?php echo $course['course_title']; ?></p>
                        </span>
                        <span class="price">
                            <h3><?php echo $course['course_price']; ?> DT</h3>
                        </span>
                    </div>
                </a>
                <div class="clock">
                    <div class="wrap">
                        <span class="hour"></span>
                        <span class="minute"></span>
                        <span class="second"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="time">
                    <i class="material-icons" id="timer">
                        hourglass_bottom
                    </i>
                    <h2><?php echo $course['course_duration']; ?></h2>
                </div>
                <h4><?php echo $course['description']; ?></h4>


            </div>
        <?php
        }
        ?>


    </div>
</body>