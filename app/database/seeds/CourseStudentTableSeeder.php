<?php 
class CourseStudentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('course_student')->delete();


        $course_student = 
        [
            [
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'student_id' => Student::where('email','=','flowerpower@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'student_id' => Student::where('email','=','iworkwithmyhands@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'student_id' => Student::where('email','=','beheaded@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Design Web')->first()->id,
                'student_id' => Student::where('email','=','beheaded@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Typographie')->first()->id,
                'student_id' => Student::where('email','=','letrain@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Typographie')->first()->id,
                'student_id' => Student::where('email','=','beheaded@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Programmation côté serveur')->first()->id,
                'student_id' => Student::where('email','=','iworkwithmyhands@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ];

        DB::table('course_student')->insert($course_student);
    }

}