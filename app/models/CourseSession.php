<?php

class CourseSession extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sessions';

    
    public function students()
    {
        return $this->belongsToMany('Student')->with('attendance_id','comment')->withTimestamps();
    }

    public function course()
    {
        return $this->belongsTo('Course');
    }

}