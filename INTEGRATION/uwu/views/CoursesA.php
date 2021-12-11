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
	$req_list=$CourseC->showpubliccourses($order,$sort); 

?>

<html>

<head>
    <title>Courses</title>
    <link href='css\style1.css'
        rel='stylesheet' />
    <link href='css\PendingRequests.css'
        rel='stylesheet' />
    <link rel="icon" type="image/png"
        href="assets\_images\1x\Asset 5.png" />

</head>

<body>
    </div>
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


                <h1 class='items'>CORE</h1>
                <img class="line"
                    src='assets\_images\1x\Asset 7.png'>
                <br>

                <a href='DashboardA.php'>
                    <div class="item">
                        <h2 class="sidebar">Dashboard</h2>
                    </div>
                </a>

                <br>

                <h1 class="items">MANAGMENT</h1>
                <img class="line"
                    src='assets\_images\1x\Asset 7.png'>
                <br>

                <a href='#'>
                    <div class='item'>
                        <h2 class="sidebar">Courses</h2>
                    </div>
                </a>



                <a href='PendingRequestsA.php'>
                    <div class='item'>
                        <h2 class="sidebar">Course Requests</h2>
                    </div>
                </a>

                <a href='produit.php'>
                                        <div class='item'>
                                                <h2 class="sidebar">Products</h2>
                                        </div>
                </a>
            </div>
            <div class="profile">
                <h1>Logged in as:</h1>
                <div class="profile_id">
                    <a href="#">
                        <h2>Yassine Derbel</h2>
                    </a>
                </div>
                <div class="profile_frame" ; style="display:block" ;><img
                        src="assets\_images\173202743_317772673290089_3203947986760422234_n.jpg"
                        alt="admin"></div>
            </div>
        </div>
        <div class="courses">
            <span class="title">
                <p>Courses</p>
            </span>
            
            <div class="requests">

                <h2>Current public courses</h2>
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
                            <a href="?order=req_id&&sort=<?php echo $sort ?>"><h1>Coordinator</h1></a>
                            </th>
                            <th>
                            <a href="?order=req_date&&sort=<?php echo $sort ?>"><h1>Date Of Publication</h1></a>
                            </th>
                            <th>
                                <h1>Actions</h1>
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
                            <td><?php echo $course['req_id']; ?></td>
                            <td><?php echo $course['req_date']; ?></td>
                            <br>
                            <td>
                            <a href="deletecourse.php?course_id=<?php echo $course['course_id'];?>">
                                <button type="button" class="a_button" id='del' >
                                Discontinue
                                </button>
                            </a>
                                <br>
                            <a href="showlessons.php?id=<?php echo $course['course_id'];?>">
                                <button type="button" class="a_button" id='view'>
                                Inspect
                                </button>
                            </a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
				}
			?>
                </table>


            </div>

        </div>
</body>
</html>