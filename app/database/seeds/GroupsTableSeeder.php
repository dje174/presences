<?php 
class GroupsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('groups')->delete();

        Group::create([
                        'name' => '2384'
                    ]);

        Group::create([
                        'name' => 'Projets Web'
                    ]);
        
        Group::create([
                        'name' => 'Répétants'
                    ]);
    }

}