<?php
	include_once '..\Controller\courseC.php';
	$CourseC=new CourseC();

    // create an instance of the controller

            $CourseC->updatestatus($_GET["id"]);


?>