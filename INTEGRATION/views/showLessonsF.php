<?php
include_once '..\Controller\courseC.php';
include_once '..\Controller\lessonC.php';
$CourseC = new CourseC();
$av_courses = $CourseC->showcategories();
$lessonC = new lessonC();
if (isset($_GET['order'])) {
    $order = $_GET['order'];
} else {
    $order = 'lesson_id';
}

if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
} else {
    $sort = 'ASC';
}

$sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
if (isset($_GET['course_id'])) {
    $req_list = $lessonC->showlessons($_GET['course_id'], $order, $sort);
    $title = $CourseC->coursetitle($_GET['course_id']);
}

?>

<html>

<head>
    <title>Manage Lessons</title>
    <link href='css\style1.css' rel='stylesheet' />
    <link href='css\PendingRequests.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="assets\_images\1x\Asset 5.png" />
    <link href='css\form.css' rel='stylesheet' />
</head>

<body>
    </div>
    <div class='menu' ; style="display:block" ;>
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
                <p>Manage Lessons</p>
            </span>

            <form action="" method="get" class="form">
                <br>
                <br>
                <br>
                <br>
                <select name="course_id" id="course_id" class="select" placeholder="Related Course">
                    <option value="">Related Course</option>
                    <?php
                    foreach ($av_courses as $course) {
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
                <input class="form_input" type="submit" id="submit_butt" placeholder="SUBMIT">
            </form>
            <div class="requests">

                <h2>
                    <?php
                    if (isset($title)) {
                        foreach ($title as $course) {
                    ?>
                        <?php

                            echo $course['course_title'];
                        }
                        ?>


                </h2>
                <br>
                <table class="req_list">
                    <thead>
                        <tr>

                            <th>
                                <a href="?course_id=<?php echo $_GET['course_id'] ?>&&order=lesson_title&&sort=<?php echo $sort ?>">
                                    <h1>Lessons</h1>
                                </a>
                            </th>
                            <th>
                                <a href="?course_id=<?php echo $_GET['course_id'] ?>&&order=content&&sort=<?php echo $sort ?>">
                                    <h1>Content</h1>
                                </a>
                            </th>
                            <th>
                                <h1>Actions</h1>
                            </th>
                        </tr>

                    </thead>
                    <?php

                        foreach ($req_list as $lesson) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $lesson['lesson_title']; ?></td>
                                <td><?php echo $lesson['content']; ?></td>
                                <br>
                                <td>
                                    <a href="deletelesson.php?lesson_id=<?php echo $lesson['lesson_id']; ?>">
                                        <button type="button" class="a_button" id='del'>
                                            Delete
                                        </button>
                                    </a>
                                    <br>
                                    <a href="editlesson.php?lesson_id=<?php echo $lesson['lesson_id']; ?>">
                                        <button type="button" class="a_button" id='view'>
                                            Edit
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                        }
                    ?>
                </table>
            <?php
                    }
            ?>


            </div>

        </div>
</body>