<?php
include_once '..\Controller\courseC.php';
$CourseC = new CourseC();
if (isset($_POST['sort'])) {
    $req_list = $CourseC->showcoursePSearched("Cyber Security", $_GET['searched'], $_POST['sort']);
} else {
    $req_list = $CourseC->showcoursePSearched("Cyber Security", $_GET['searched'], 'course_id ASC');
}

?>
<html>

<head>
    <title>Cyber Security</title>
    <link href='css\LandingPage.css' rel='stylesheet' />
    <link href='css\WebDev.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="assets\_images\1x\Asset 5.png" />
    <link href='css\form.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div id="top_header">
        <div class='Logo' ;>
            <span class="img"><img src="assets\_images\1x\Asset 5.png" alt="Meta-Four"></span>
            <span class="text">
                <h1>Meta-Four</h1>
                <h2>The source for computing and technology.</h2>
            </span>
        </div>
        <img class='seperator' id='seperator1' src="assets\_images\1x\seperator.png" alt="seperator">
        <div class="navigation">
            <a href="#" id='shop'>
                <h2>SHOP</h2>
            </a>
            <a href="#" id='forum'>
                <h2>FORUM</h2>
            </a>
            <a href="CoursesPage.php" id='courses'>
                <h2>COURSES</h2>
            </a>
            <a href="#" id='about_us'>
                <h2>ABOUT US</h2>
            </a>
        </div>
        <img class='seperator' id='seperator2' src="assets\_images\1x\seperator.png" alt="seperator">
        <div class="user_profile">
            <img id='usr_img' src="assets\_images\173202743_317772673290089_3203947986760422234_n.jpg" alt="user">
            <a href="#">
                <h2>My account</h2>
            </a>
        </div>
    </div>
    <div id='title'>
        <h>Cyber Security</h>
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