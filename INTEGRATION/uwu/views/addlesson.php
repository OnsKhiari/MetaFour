<?php

include_once '..\Controller\courseC.php';
include_once '..\Model\course.php';
include_once '..\Controller\lessonC.php';
include_once '..\Model\lesson.php';
$error = "";

$vid_name = $_FILES['lesson_vid']['name'];
$vid_size = $_FILES['lesson_vid']['size'];
$tmp_name = $_FILES['lesson_vid']['tmp_name'];
$error = $_FILES['lesson_vid']['error'];
if ($error === 0) {
    $vid_ex = pathinfo($vid_name, PATHINFO_EXTENSION);
    $vid_ex_lc = strtolower($vid_ex);
    $allowed_exs = array("mp4");
    if (in_array($vid_ex_lc, $allowed_exs)) {
        $new_vid_name = uniqid("VID-", true) . '.' . $vid_ex_lc;
        $vid_upload_path = 'lessons/' . $new_vid_name;
        move_uploaded_file($tmp_name, $vid_upload_path);
    }
}



$CourseC = new courseC();
$req_list = $CourseC->showcategories();

$lessonC = new lessonC();

if (
    isset($_POST["lesson_title"]) &&
    isset($_POST["content"]) &&
    isset($_POST["course_id"])
) {
    if (
        !empty($_POST["lesson_title"]) &&
        !empty($_POST["content"]) &&
        !empty($_POST["course_id"])
    ) {
        $lesson = new lesson(
            $_POST['lesson_title'],
            $_POST['content'],
            $_POST['course_id'],
            $vid_upload_path,
        );
        $lessonC->addlesson($lesson);
    } else
        $error = "Missing information";
}
?>



<html>

<head>
    <title>Add Lesson</title>
    <link href='css\style1.css' rel='stylesheet' />
    <link href='css\PendingRequests.css' rel='stylesheet' />
    <link href='css\form.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="assets\_images\1x\Asset 5.png" />
    <script defer src="Javascript\addlesson.js"></script>
</head>

<body>

    <div class='Logo' ;>
        <span class="img"><img src="assets\_images\1x\Asset 5.png" alt="Meta-Four"></span>
        <span class="text">
            <h1>Meta-Four</h1>
            <h2>The source for computing and technology.</h2>
        </span>
    </div>

    <div class='sidebar' id="Sidebar">
        <br>
        <div class='items'>
            <br>

            <h1 class="items">MANAGMENT</h1>
            <img class="line" src='assets\_images\1x\Asset 7.png'>
            <br>
            <a href='addcourse.php'>
                <div class='item'>
                    <h2 class="sidebar">Add Course</h2>
                </div>
            </a>

            <a href='CoursesF.php'>
                <div class='item'>
                    <h2 class="sidebar">Courses</h2>
                </div>
            </a>



            <a href='PendingRequestsF.php'>
                <div class='item'>
                    <h2 class="sidebar">Course Requests</h2>
                </div>
            </a>

            <a href='addlesson.php'>
                <div class='item'>
                    <h2 class="sidebar">Add Lesson</h2>
                </div>
            </a>
            <a href='showLessonsF.php'>
                <div class='item'>
                    <h2 class="sidebar">Manage Lessons</h2>
                </div>
            </a>

        </div>
        <div class="profile">
            <h1>Logged in as:</h1>
            <div class="profile_id">
                <a href="#">
                    <h2>Formateur 1</h2>
                </a>
            </div>
            <div class="profile_frame" ; style="display:block" ;><img src="assets\_images\formation-presentielle-2.jpg" alt="formateur"></div>
        </div>
    </div>
    <div class="courses">
        <span class="title">
            <p>Add Lesson</p>
        </span>

        <div class="requests">

            <h2>Add a lesson to a public course : </h2>
            <form action="" method="post" class="form" id='form' enctype="multipart/form-data">

                <input class="form_input" type="text" name="lesson_title" id="lesson_title" placeholder="Title" maxlength="30">
                <label class="form__label" for="lesson_title">Title</label>
                <br>
                <div id="title_error"></div>
                <br>
                <textarea name="content" id="content" cols="30" rows="10" class="form_input" placeholder="Content"></textarea>
                <label class="form__label" for="content">Lesson Content</label>
                <br>
                <div id="content_error"></div>
                <br>
                <select name="course_id" id="course_id" class="select" placeholder="Related Course">
                    <option value="">Related Course</option>


                    <?php
                    foreach ($req_list as $course) {
                    ?>
                        <optgroup label="<?php echo $course['course_category']; ?>">
                            <?php

                            $list_categ = $CourseC->showcourseP($course['course_category']);
                            foreach ($list_categ as $course1) {
                            ?>
                                <option value="<?php echo $course1['course_id']; ?>"> <?php echo $course1['course_title']; ?></option>
                            <?php
                            }
                            ?>

                        <?php
                    }
                        ?>
                        </optgroup>
                </select>
                <br>
                <div id="course_id_error"></div>
                <br>
                <input class="form_input" type="file" name="lesson_vid" id="lesson_vid" accept="video/mp4">
                <label class="form__label" for="lesson_vid">Lesson Video</label>
                <br>
                <div id="video_error"></div>
                <br>
                <input class="form_input" type="submit" id="submit_butt" placeholder="SUBMIT">
                <br>

            </form>
            <br>
        </div>


</body>

</html>