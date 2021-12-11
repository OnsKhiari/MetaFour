<?php
	include_once '../Controller/categorieC.php';
	

	
	$categorieC=new CategorieC();
	$listecategorie=$categorieC->affichercategorie(); 
	if (isset($_POST['tri'])) { 
	$listeproduit = $produitC->tri();}
?>
<html>

<head>
    <title>COURSES</title>
    <link
        href='css\LandingPage.css'
        rel='stylesheet' />
    <link rel="icon" type="image/png"
        href="assets\_images\1x\Asset 5.png" />
        <link rel="stylesheet" href="assets/css/style1.css">
        <link rel="stylesheet" href="assets/css/footer.css">

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
    <div class="current_class" id='Data_Science'>
        <img src="assets\_images\1x\cyber_sec.png"
            alt="data_science">
        <h1>Data Science</h1>
        <p>What is artificial intelligence, machine learning, and big data? How do they impact my life and society?
            Explore these topics with a beginner-friendly introduction to data science, covering use cases, and problems
            solving solutions. </p>
        <a href="DataScience.php">
            <div class="button" id="Data_Science_butt">
                <p>Show Courses</p>
            </div>
        </a>
    </div>
    <div class="current_class" id='Cyber_security'>
        <img src="assets\_images\1x\cybersecurity.png"
            alt="cybersecurity">
        <h1 id='cyber_security_t'>Cyber Security</h1>
        <p id='cyber_security_t'>Learn a practical skill-set in defeating all online threats, including - advanced
            hackers, trackers, malware, zero days, exploit kits, cybercriminals and more.

            Become a Cyber Security Specialist - Go from a beginner to advanced in this easy to follow expert course.

            Covering all major platforms - Windows 7, Windows 8, Windows 10, MacOS and Linux.
        </p>
        <a href="CyberSec.php">
            <div class="button" id="Cyber_Security_butt">
                <p>Show Courses</p>
            </div>
        </a>
    </div>
    <div class="current_class" id='WEB_dev'>
        <img src="assets\_images\1x\web.png"
            alt="web_dev">
        <h1>Web Development</h1>
        <p>Welcome to the Ultimate Web Developer Bootcamp. This is your one-stop-shop to learn front-end AND back-end
            development.
            We'll take you from absolute beginner to competent full-stack web developer in a matter of weeks.</p>
        <a href="WebDev.php">
            <div class="button" id="Web_Dev_butt">
                <p>Show Courses</p>
            </div>
        </a>
    </div>

 
</body>
</html>