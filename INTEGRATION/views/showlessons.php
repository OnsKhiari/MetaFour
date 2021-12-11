<?php
	error_reporting(0);
    ini_set('display_errors', 0);
	include_once '../Controller/categorieC.php';
	

	
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
	if (isset($_POST['tri'])) { 
	$listeproduit = $produitC->tri();}
include_once '..\Controller\lessonC.php';
include_once '..\Controller\courseC.php';
$CourseC = new courseC();
$lessonC = new lessonC();
$current_page;
$course_list = $CourseC->coursetitle($_GET["id"]);
$lesson_list = $lessonC->showlessons($_GET["id"], 'lesson_id', 'ASC');



?>
<html>

<head>

    <title>Lessons</title>
    <link href='css\LandingPage.css' rel='stylesheet' />
    <link href='css\lessonsview.css' rel='stylesheet' />
    <link href='css\form.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="assets\_images\1x\Asset 5.png" />
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

    <div class="title">
        <?php
        foreach ($course_list as $course) {
        ?>
            <div class="desc_img">
                <h1><?php echo $course['course_title']; ?></h1>
                <p>FULL DESCRIPTION<br> <br><?php echo $course['description']; ?></p>
            </div>
            <img src="<?php echo $course['thumbnail']; ?>" alt="imgg">
        <?php
        }
        ?>
    </div>
    <div class="lessons_container">

        <?php
        $error = "";
        if ($lesson_list->rowCount() == 0) {
            $error = "Oops, No Lessons Added Yet!";
        }
        ?>
        <h1 class="emoji" id="emoji"></h1>
        <h1 class="error"><?php echo ($error) ?></h1>
        <?php
        foreach ($lesson_list as $lesson) {
        ?>

            <div class="lesson">
                <h1><?php echo $lesson['lesson_title']; ?> </h1>
                <P><?php echo $lesson['content']; ?> </P>
                <video width="900" height="600" autoplay controls muted>
                    <source src="<?php echo $lesson['video'] ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <br><br>

            </div>

        <?php
        }
        ?>
    </div>


</body>

<script type="text/javascript">
    var error = "<?php echo ($error); ?>";
    var emoji = document.getElementById("emoji");
    if (error != "") {

        var r_text = new Array();
        r_text[0] = " \\(o_o)/";
        r_text[1] = "(·_·)";
        r_text[2] = "\\(^Д^)/";
        r_text[3] = "(˚Δ˚)b";
        r_text[4] = "(='X'=)";
        r_text[5] = "(·.·)";

        var i = Math.floor(r_text.length * Math.random());
        emoji.innerText = r_text[i];
    }
</script>