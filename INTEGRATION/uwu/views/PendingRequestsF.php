<?php
	include_once '..\Controller\courseC.php';
	$CourseC=new CourseC();
	
    if(isset($_GET['order']))
    {
    $order=$_GET['order'];
    }
    else
    {
    $order='course_title';
    }

    if(isset($_GET['sort']))
    {
    $sort=$_GET['sort'];
    }
    else
    {
    $sort='ASC';
    }
    $sort== 'DESC' ? $sort='ASC' :$sort='DESC';

    $req_list=$CourseC->showrequests($order,$sort); 

?>
<html>

<head>
    <title>Pending Requests</title>
    <link href='css\style1.css'
        rel='stylesheet' />
    <link
        href='css\PendingRequests.css'
        rel='stylesheet' />
    <link rel="icon" type="image/png"
        href="assets\_images\1x\Asset 5.png" />

</head>

<body>
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
                <br>

                <h1 class="items">MANAGMENT</h1>
                <img class="line"
                    src='assets\_images\1x\Asset 7.png'>
                <br>


                <a
                    href='addcourse.php'>
                    <div class='item'>
                        <h2 class="sidebar">Add Course</h2>
                    </div>
                </a>

                <a
                    href='CoursesF.php'>
                    <div class='item'>
                        <h2 class="sidebar">Courses</h2>
                    </div>
                </a>



                <a
                    href='PendingRequestsF.php'>
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
                <div class="profile_frame" ; style="display:block" ;><img
                        src="assets\_images\formation-presentielle-2.jpg"
                        alt="formateur"></div>
            </div>
        </div>
        <div class="courses">
            <span class="title">
                <p>Publication Requests</p>
            </span>

            <div class="requests">

                <h2>Pending Publication Requests</h2>
                <br>
                <table class="req_list">
                    <thead>
                        <tr>
                            <th>
                            <a href="?order=course_title&&sort=<?php echo $sort ?>"><h1>Course</h1></a>
                            </th>
                            <th>
                            <a href="?order=course_category&&sort=<?php echo $sort ?>"><h1>Category</h1></a>
                            </th>
                            <th>
                            <a href="?order=course_price&&sort=<?php echo $sort ?>"><h1>Price</h1></a>
                            </th>
                            <th>
                            <a href="?order=req_date&&sort=<?php echo $sort ?>"><h1>Date Of Request</h1></a>
                            </th>
                            <th>
                                <h1>Status</h1>
                            </th>
                        </tr>
                    </thead>
                    <?php
				foreach($req_list as $course){
			?>
                    <tbody>
                    <tr>
                    <td><?php echo $course['course_title']; ?></td>
                            <td><?php echo $course['course_category']; ?></td>
                            <td><?php echo $course['course_price']; ?> DT</td>
                            <td><?php echo $course['req_date']; ?></td>
                            <td>Pending..</td>
                        </tr>
                    </tbody>
                    <?php
				}
			?>
                </table>


            </div>

        </div>
    </div>
</body>

