<?php

use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class Teacher extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /**
     * Method helping to retrieve the courses of a teacher
     *
     * 
     */
    public function courses()
    {
        return $this->belongsToMany('Course')->withTimestamps();
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

}