<?php

class lesson{
    private  $lesson_id=null;
    private  $lesson_title=null;
    private  $content;
    private  $course_id;
    private  $video;

    public function __construct ( $lesson_title, $content, $course_id,$video){
    $this->lesson_title = $lesson_title;
    $this->content = $content;
    $this->course_id = $course_id;
    $this->video = $video;

    }

    public function getLessonId() {
        return $this->lesson_id;
    }

    public function setLessonTitle ( $lesson_title)
    {
        $this->lesson_title = $lesson_title;
    }
    public function getLessonTitle () {
        return $this->lesson_title;
    }

    public function setContent ( $content)
    {
        $this->content = $content;
    }
    public function getContent () {
        return $this->content;
    }

    public function setCourseId ( $course_id)
    {
        $this->course_id = $course_id;
    }
    public function getCourseId () {
        return $this->course_id;
    }

    public function setLessonVid ( $video)
    {
        $this->video = $video;
    }
    public function getLessonVid () {
        return $this->video;
    }


}
