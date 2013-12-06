<?php 
class YearsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('years')->delete();

        Year::create(array('name' => '2009-2010'));
        Year::create(array('name' => '2010-2011'));
        Year::create(array('name' => '2011-2012'));
        Year::create(array('name' => '2012-2013'));
        Year::create(array('name' => '2013-2014'));
        Year::create(array('name' => '2014-2015'));
    }

}