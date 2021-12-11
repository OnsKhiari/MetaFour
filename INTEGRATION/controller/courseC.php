<?php

include_once '..\config.php';
include_once '..\Model\course.php';
class courseC
{

  function addcourse($course)
  {
    $sql = "INSERT INTO course(course_title,course_duration,course_price,course_category,thumbnail,description,status,req_id,req_date)
    VALUES(:course_title,:course_duration,:course_price,:course_category,:thumbnail,:description,:status,:req_id,:req_date)";
    $db = config::getConnexion();
    try {
      $query = $db->prepare($sql);
      $query->execute([
        'course_title' => $course->getCourseTitle(),
        'course_duration' => $course->getCourseDuration(),
        'course_price' => $course->getCoursePrice(),
        'course_category' => $course->getCourseCategory(),
        'thumbnail' => $course->getThumbnail(),
        'description' => $course->getCourseDescription(),
        'status' => 0,
        'req_id'=>'Formateur1',
        'req_date' =>date("y/m/d")

      ]);
    } catch (Exception $e) {
      echo 'erreur' . $e->getMessage();
    }
  }

  function showrequests($order,$sort){
    $sql="SELECT course_id,course_title,course_category,course_price,req_id,req_date FROM course WHERE (status=0) ORDER by $order $sort";
    $db = config::getConnexion();
    try{
      $list = $db->query($sql);
      return $list;
    }
    catch(Exception $e){
      die('Erreur:'. $e->getMessage());
    }
  }

  function showcourseP($course_category){
    $sql="SELECT  * FROM course WHERE (status=1 AND strcmp(course_category,'$course_category')=0)";
    $db = config::getConnexion();
    try{
      $list = $db->query($sql);
      return $list;
    }
    catch(Exception $e){
      die('Erreur:'. $e->getMessage());
    }
  }

  function showcoursePSearched($course_category,$searched,$sort){
    $sql="SELECT  * FROM course WHERE (status=1 AND strcmp(course_category,'$course_category')=0 AND (course_title LIKE '%$searched%' OR description LIKE'%$searched%') ) order by $sort";
    $db = config::getConnexion();
    try{
      $list = $db->query($sql);
      return $list;
    }
    catch(Exception $e){
      die('Erreur:'. $e->getMessage());
    }
  }

  function showcategories(){
    $sql="SELECT Distinct course_category FROM course WHERE (status=1 )";
    $db = config::getConnexion();
    try{
      $list = $db->query($sql);
      return $list;
    }
    catch(Exception $e){
      die('Erreur:'. $e->getMessage());
    }
  }




  function updatestatus($course_id){
    
  $update="UPDATE course set status=:status WHERE course_id='$course_id' ";
  $db = config::getConnexion();
    
    try {
      $query=$db->prepare($update);
      $query->execute(['status'=> 1]);
      header('Location: ..\Views\PendingRequestsA.php');
    } catch (Exception $e) {
      $e->getMessage();
    }
  }

  function showpubliccourses($order,$sort){
    $sql="SELECT  course_id,course_title,course_category,req_id,req_date FROM course WHERE (status=1 ) ORDER by $order $sort";
    $db = config::getConnexion();
    try{
      $list = $db->query($sql);
      return $list;
    }
    catch(Exception $e){
      die('Erreur:'. $e->getMessage());
    }
  }

  function deletecourse($course_id){
    $sql="DELETE FROM course WHERE course_id='$course_id' ";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':course_id', $course_id);
    try{
      $req->execute();
    }
    catch(Exception $e){
      die('Erreur:'. $e->getMessage());
    }
  }

  function coursetitle($course_id){
    $sql="SELECT * FROM course WHERE course_id='$course_id' ";
    $db = config::getConnexion();
    try{
      $list = $db->query($sql);
      return $list;
    }
    catch(Exception $e){
      die('Erreur:'. $e->getMessage());
    }
  }


}




?>
