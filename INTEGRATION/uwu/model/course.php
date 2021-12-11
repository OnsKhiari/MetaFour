<?php

class course{
    private  $course_id=null;
    private  $course_title=null;
    private  $course_duration;
    private  $course_price=null;
    private  $course_category;
    private  $thumbnail;
    private  $description=null;
    private  $status=null;
    private  $req_id=null;
    private  $req_date=null;

    public function __construct ( $course_title, $course_duration, $course_price, $course_category,$thumbnail, $description){
    $this->course_title = $course_title;
    $this->course_duration = $course_duration;
    $this->course_price = $course_price;
    $this->course_category = $course_category;
    $this->thumbnail = $thumbnail;
    $this->description = $description;
    }

    public function getCourseId() {
        return $this->course_id;
    }

    public function setCourseTitle ( $course_title)
    {
        $this->course_title = $course_title;
    }
    public function getCourseTitle () {
        return $this->course_title;
    }

    public function setCourseDuration ( $course_duration)
    {
        $this->course_duration = $course_duration;
    }
    public function getCourseDuration () {
        return $this->course_duration;
    }

    public function setCoursePrice ( $course_price)
    {
        $this->course_price = $course_price;
    }
    public function getCoursePrice () {
        return $this->course_price;
    }

    public function setCourseCategory ( $course_category)
    {
        $this->course_category = $course_category;
    }
    public function getCourseCategory () {
        return $this->course_category;
    }

    
    public function setCourseDescription ( $description)
    {
        $this->description = $description;
    }
    public function getCourseDescription () {
        return $this->description;
    }

    public function setCourseStatus ( $status)
    {
        $this->status = $status;
    }
    public function getCourseStatus () {
        return $this->status;
    }

    public function setReqId ( $req_id)
    {
        $this->req_id = $req_id;
    }
    public function getReqId () {
        return $this->req_id;
    }

    public function setReqDate ( $req_date)
    {
        $this->req_date = $req_date;
    }
    public function getReqDate () {
        return $this->req_date;
    }
   
    public function  setThumbnail ( $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
    public function getThumbnail () {
        return $this->thumbnail;
    }
}
