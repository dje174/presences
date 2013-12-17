<?php 
class SessionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('sessions')->delete();

        CourseSession::create(
            [
                'date_start' => new DateTime('2013-09-22 08:20:00'),
                'date_end' => new DateTime('2013-09-22 17:40:00'),
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'description' => 'Séance consacrée à SASS'
            ]
            
        );
        CourseSession::create(
            [
                'date_start' => new DateTime('2013-09-23 08:20:00'),
                'date_end' => new DateTime('2013-09-23 17:40:00'),
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'description' => 'Séance consacrée à SASS'
            ]
        );
        CourseSession::create(
            [
                'date_start' => new DateTime('2013-09-29 08:20:00'),
                'date_end' => new DateTime('2013-09-29 17:40:00'),
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'description' => 'Séance consacrée à Laravel'
            ]
        );
        CourseSession::create(
            [
                'date_start' => new DateTime('2013-09-30 08:20:00'),
                'date_end' => new DateTime('2013-09-30 17:40:00'),
                'course_id' => Course::where('name','=','Projets Web')->first()->id,
                'description' => 'Séance consacrée à Laravel'
            ]
        );
        CourseSession::create(
            [
                'date_start' => new DateTime('2013-09-16 08:20:00'),
                'date_end' => new DateTime('2013-09-16 10:20:00'),
                'course_id' => Course::where('name','=','Design Web')->first()->id,
                'description' => 'Séance consacrée à Font-Family'
            ]
        );
        CourseSession::create(
            [
                'date_start' => new DateTime('2013-09-23 08:20:00'),
                'date_end' => new DateTime('2013-09-23 10:20:00'),
                'course_id' => Course::where('name','=','Design Web')->first()->id,
                'description' => 'Séance consacrée à Float'
            ]
        );
    }

}