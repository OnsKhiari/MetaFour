<?php
	include_once '..\Controller\lessonC.php';
	$lessonC=new lessonC();
	$lessonC->deletelesson($_GET["lesson_id"]);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>