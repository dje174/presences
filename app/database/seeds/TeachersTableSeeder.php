<?php 
class TeachersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('teachers')->delete();

        Teacher::create([
                        'name' => 'Vilain',
                        'first_name' => 'Dominique',
                        'email' => 'dominique.vilain@hepl.be',
                        'password' => Hash::make('dominique')    
                        ]);
        Teacher::create([
                        'name' => 'Dupont',
                        'first_name' => 'Myriam',
                        'email' => 'myriam.dupont@hepl.be',
                        'password' => Hash::make('myriam')    
                        ]);
    }

}