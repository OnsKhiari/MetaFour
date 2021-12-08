<?php

include_once '..\Controller\courseC.php';
include_once '..\Model\course.php';
$error = "";

$img_name = $_FILES['thumbnail']['name'];
	    $img_size = $_FILES['thumbnail']['size'];
	    $tmp_name = $_FILES['thumbnail']['tmp_name'];
	    $error = $_FILES['thumbnail']['error'];
        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
    
            $allowed_exs = array("jpg", "jpeg", "png", "gif"); 
    
            if (in_array($img_ex_lc, $allowed_exs)) 
            {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);            
            }
        }

$CourseC=new courseC();
if (
    isset($_POST["course_title"]) &&
    isset($_POST["course_duration"]) &&		
    isset($_POST["course_price"]) &&
    isset($_POST["course_category"]) && 
    isset($_POST["description"]) 
) {
    if (
        !empty($_POST["course_title"]) &&
        !empty($_POST["course_duration"]) &&		
        !empty($_POST["course_price"]) &&
        !empty($_POST["course_category"]) && 
        !empty($_POST["description"]) 
    ) {
 
        $course = new course(
            $_POST['course_title'],
            $_POST['course_duration'],
            $_POST['course_price'], 
            $_POST['course_category'],
            $img_upload_path,
            $_POST['description']
        );
        $CourseC->addcourse($course);
    }
    else
        $error = "Missing information";
}
?>



<html>

<head>
    <title>Add Courses</title>
    <link href='css\style1.css' rel='stylesheet' />
    <link href='css\PendingRequests.css' rel='stylesheet' />
    <link href='css\form.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="assets\_images\1x\Asset 5.png" />
    <script defer src="Javascript\addcourse.js"></script>
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
            <a
                    href='showLessonsF.php'>
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
            <p>Add Course</p>
        </span>

        <div class="requests">
            
            <h2>Request the addition of a new course : </h2>
            <form action="" method="post" class="form" name="addcourse" id='form' required enctype="multipart/form-data">
                
                <input class="form_input" type="text" name="course_title" id="course_title" placeholder="Title" >
                <label class="form__label" for="course_title">Title</label>
                <br>
                <div  id="title_error"></div>
                <span id="numloc"></span>
                <br>
                <input class="form_input" type="text" name="course_duration" id="course_duration" placeholder="Course Duration" onfocus="(this.type='time')"  maxlength="50">
                <label class="form__label" for="course_duration">Course Duration</label>
                <br>
                <div  id="dur_error"></div>
                <br>
                <input class="form_input" type="number" name="course_price" id="course_price" placeholder="Course Price" >
                <label class="form__label" for="course_price">Course Price</label>
                <br>
                <div  id="price_error"></div>
                <br>
                <select name="course_category" id="course_category" class="select" placeholder="Course Category" >
                    <option value="">Course Category</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Data Science">Data Science</option>
                </select>
                <label class="form__label" for="course_category">Course Category</label>
                <br>
                <div  id="categ_error"></div>
                <br>
                <input class="form_input" type="file" name="thumbnail" id="thumbnail" accept=".jpg,.jpeg,.png" onchange="validateFileType()">
                <label class="form__label" for="thumbnail">Course Thumbnail</label>
                <br>
                <div  id="photo_error"></div>
                <br>
                <textarea name="description" id="description" cols="30" rows="10" class="form_input" placeholder="description"></textarea>
                <label class="form__label" for="description">Course description</label>
                <br>
                <input class="form_input" type="submit" id="submit_butt" placeholder="SUBMIT" >

            </form>
            
            <br>
        </div>



</body>

</html>