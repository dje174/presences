<?php 
class GroupStudentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('group_student')->delete();

        $group_student = 
        [
            [
                'group_id' => Group::where('name','=','2384')->first()->id,
                'student_id' => Student::where('email','=','flowerpower@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'group_id' => Group::where('name','=','2384')->first()->id,
                'student_id' => Student::where('email','=','iworkwithmyhands@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'group_id' => Group::where('name','=','Projets Web')->first()->id,
                'student_id' => Student::where('email','=','beheaded@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'group_id' => Group::where('name','=','Projets Web')->first()->id,
                'student_id' => Student::where('email','=','iworkwithmyhands@hepl.be')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ];

        DB::table('group_student')->insert($group_student);
    }

}