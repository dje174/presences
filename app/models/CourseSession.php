<?php

class CourseSession extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sessions';

    public function getDates()
    {
        return array_merge(parent::getDates(), array('date_start', 'date_end'));
    }
    
    public function students()
    {
        return $this->belongsToMany('Student', 'session_student', 'session_id', 'student_id')
                    ->withPivot('attendance_id','comment')
                    ->withTimestamps();
    }

    public function course()
    {
        return $this->belongsTo('Course');
    }

}