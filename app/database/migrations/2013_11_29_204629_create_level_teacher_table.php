<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLevelTeacherTable extends Migration {

	/**
	 * Creates the pivot table between level and teacher
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('level_teacher', function(Blueprint $table) {
			$table->integer('level_id')->unsigned();
			$table->integer('teacher_id')->unsigned();
			$table->foreign('level_id')->references('id')->on('levels');
			$table->foreign('teacher_id')->references('id')->on('teachers');
			
			$table->timestamps();
		});
	}


	/**
	 * Drops the level_teacher pivot table
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('level_teacher');
	}

}
