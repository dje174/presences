<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('LevelsTableSeeder');
		$this->call('StudentsTableSeeder');
		$this->call('GroupsTableSeeder');
		$this->call('AttendancesTableSeeder');
		$this->call('YearsTableSeeder');
		$this->call('TeachersTableSeeder');
		$this->call('CoursesTableSeeder');
		
		$this->call('GroupStudentTableSeeder');
		$this->call('CourseTeacherTableSeeder');
		$this->call('CourseStudentTableSeeder');
		$this->call('SessionsTableSeeder');
		$this->call('SessionStudentTableSeeder');
		$this->call('HomesTableSeeder');
		$this->call('UsersTableSeeder');
	}

}