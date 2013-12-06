<?php

class Student extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * Method helping to retrieve the courses of a teacher
     *
     * 
     */ 

    public function sessions()
    {
        return $this->belongsToMany('CourseSession')->with('attendance_id','comment')->withTimestamps();
    }

    public function groups()
    {
        return $this->belongsToMany('Group')->withTimestamps();
    }

    public function level()
    {
        return $this->belongsTo('Level');
    }

    public function courses()
    {
        return $this->belongsToMany('Course');
    }

}