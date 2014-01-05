<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class User extends Eloquent implements UserInterface, RemindableInterface {
    protected $fillable = [ 'first_name', 'name', 'email', 'password' ];

    public static $rules = [
        'first_name' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ];

    public $errors;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';


    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;
    }

    public function courses()
    {
        return $this->belongsToMany('Course','course_teacher','teacher_id','course_id')->withTimestamps();
    }

    
    public function studentsAsArray()
    {
        return $this
                        ->join('course_teacher', 'teachers.id', '=', 'course_teacher.teacher_id')
                        ->join('courses', 'courses.id','=','course_teacher.course_id')
                        ->join('course_student','courses.id','=', 'course_student.course_id')
                        ->join('students', 'students.id','=','course_student.student_id')
                        ->whereTeacherId(1)
                        ->distinct('students.id')
                        ->get(['students.id as id','students.name as name','students.first_name as first_name']);
    }

    public function studentsAsEloquentCollection()
    {
        $students = new EloquentCollection;
        //$courses  = $this->courses()->has('students')->with('students')->get();
        $courses  = $this->courses;

        foreach ($courses as $course) 
        {
            $students = $students->merge($course->students);
        }
        return $students;

    }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}