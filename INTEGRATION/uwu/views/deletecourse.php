<?php
	include_once '..\Controller\courseC.php';
	include_once '..\Controller\lessonC.php';
	$courseC=new courseC();
	$lessonC=new lessonC();
	$lessonC->deleteallcourses($_GET["course_id"]);
	$courseC->deletecourse($_GET["course_id"]);
	header('Location: CoursesA.php');
?>