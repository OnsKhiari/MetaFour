<?php
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
                <h2>My Account</h2>
            </a>
        </div>
    </div>

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