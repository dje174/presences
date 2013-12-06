<?php 
class LevelsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('levels')->delete();

        Level::create(array('name' => 'première année infographie'));
        Level::create(array('name' => 'deuxième année infographie'));
        Level::create(array('name' => 'troisième année infographie'));
    }

}