<?php 
class SessionStudentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('session_student')->delete();


        $session_student = 
        [
            [
                'session_id' => CourseSession::where('date_start','=','2013-09-22 08:20:00')->where('course_id','=',Course::where('name','=','Projets Web')->first()->id)->first()->id,
                'student_id' => Student::where('email','=','flowerpower@hepl.be')->first()->id,
                'attendance_id' => Attendance::where('status','=','present')->first()->id,
                'comment' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            
            [
                'session_id' => CourseSession::where('date_start','=','2013-09-23 08:20:00')->where('course_id','=',Course::where('name','=','Projets Web')->first()->id)->first()->id,
                'student_id' => Student::where('email','=','flowerpower@hepl.be')->first()->id,
                'attendance_id' => Attendance::where('status','=','present')->first()->id,
                'comment' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            
            [
                'session_id' => CourseSession::where('date_start','=','2013-09-29 08:20:00')->where('course_id','=',Course::where('name','=','Projets Web')->first()->id)->first()->id,
                'student_id' => Student::where('email','=','flowerpower@hepl.be')->first()->id,
                'attendance_id' => Attendance::where('status','=','absent')->first()->id,
                'comment' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            
        ];

        DB::table('session_student')->insert($session_student);
    }

}