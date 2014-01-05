<?php

class Course extends Eloquent {

    protected $fillable = [ 'name', 'description', 'level', 'year' ];

    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'level' => 'required',
        'year' => 'required'
    ];

    public $errors;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';


    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;
    }

    /**
     * Method helping to retrieve the Year of a Course
     *
     * 
     */
    public function year()
    {
        return $this->belongsTo('Year');
    }

    /**
     * Method helping to retrieve the Level of a Course
     *
     * 
     */
    public function level()
    {
        return $this->belongsTo('Level');
    }

    /**
     * Method helping to retrieve the Teachers of a Course
     *
     * 
     */
    public function teachers()
    {
        return $this->belongsToMany('User','course_teacher','course_id','teacher_id')->withTimestamps();
    }

    public function students()
    {
        return $this->belongsToMany('Student')->withTimestamps();
    }

    public function sessions()
    {
        return $this->hasMany('CourseSession');
    }

}