<?php

class Student extends Eloquent {
    protected $fillable = [ 'first_name', 'name', 'email', 'photo', 'level_id' ];

    public static $rules = [
        'first_name' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'photo' => 'image',
        'level_id' => 'required'
    ];

    public $errors;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';


    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;
    }

    /**
     * Method helping to retrieve the courses of a teacher
     *
     * 
     */ 

    public function sessions()
    {
        return $this->belongsToMany('CourseSession', 'session_student', 'student_id', 'session_id')
                    ->withPivot('attendance_id','comment')
                    ->withTimestamps();
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