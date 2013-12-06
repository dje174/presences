<?php 
class AttendancesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('attendances')->delete();

        Attendance::create(array('status' => 'Present'));
        Attendance::create(array('status' => 'Absent'));
        Attendance::create(array('status' => 'Excusé'));
    }

}