<?php 
class CourseTeacherTableSeeder extends Seeder {

    public function run()
    {
        DB::table('course_teacher')->delete();


        $course_teacher = 
        [
            [
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'teacher_id' => Teacher::where('email','=','dominique.vilain@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Design Web')->first()->id,
                'teacher_id' => Teacher::where('email','=','myriam.dupont@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Design Web')->first()->id,
                'teacher_id' => Teacher::where('email','=','dominique.vilain@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'course_id' => Course::where('name','=','Typographie')->first()->id,
                'teacher_id' => Teacher::where('email','=','myriam.dupont@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],

        ];

        DB::table('course_teacher')->insert($course_teacher);
    }

}