<?php
	include_once '..\Controller\courseC.php';
	$courseC=new courseC();
	$courseC->deletecourse($_GET["course_id"]);
	header('Location: PendingRequestsA.php');
?>