<?php
include_once '..\config.php';
include_once '..\Model\lesson.php';

class lessonC
{

    function addlesson($lesson)
    {
      $sql = "INSERT INTO lesson(lesson_title,content,course_id,video)
      VALUES(:lesson_title,:content,:course_id,:video)";
      $db = config::getConnexion();
      try {
        $query = $db->prepare($sql);
        $query->execute([
          'lesson_title' => $lesson->getLessonTitle(),
          'content' => $lesson->getContent(),
          'course_id' => $lesson->getCourseId(),
          'video' => $lesson->getLessonVid(),
        ]);
      } catch (Exception $e) {
        echo 'erreur' . $e->getMessage();
      }
    }

    function showlessons($course_id,$order,$sort){
        $sql="SELECT * FROM lesson WHERE (course_id='$course_id')  ORDER by $order $sort";
        $db = config::getConnexion();
        try{
          $list = $db->query($sql);
          return $list;
        }
        catch(Exception $e){
          die('Erreur:'. $e->getMessage());
        }
      }


      function deletelesson($lesson_id){
        $sql="DELETE FROM lesson WHERE lesson_id='$lesson_id' ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':lesson_id', $lesson_id);
        try{
          $req->execute();
        }
        catch(Exception $e){
          die('Erreur:'. $e->getMessage());
        }
      }

      function editlesson($lesson, $lesson_id){
        
        $update="UPDATE lesson set lesson_title=:lesson_title,content=:content,video=:video WHERE lesson_id='$lesson_id' ";
        $db = config::getConnexion();
          
          try {
            $query=$db->prepare($update);
            $query->execute(['lesson_title'=>$lesson->getLessonTitle(),'content'=>$lesson->getContent(),'video'=>$lesson->getLessonVid()]);
          } catch (Exception $e) {
            $e->getMessage();
          }
      }


      function findlesson($lesson_id){
        $sql="SELECT * from lesson where lesson_id=$lesson_id";
        $db = config::getConnexion();
        try{
          $query=$db->prepare($sql);
          $query->execute();
  
          $lesson=$query->fetch();
          return $lesson;
        }
        catch (Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }

    function deleteallcourses($course_id)
    {
      $sql="DELETE FROM lesson WHERE course_id='$course_id' ";
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
}
?>