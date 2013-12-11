<?php

class UsersTableSeeder extends Seeder {

public function run()
    {
        DB::table('teachers')->delete();
        //Rien de très malin ici, juste une création manuelle
        User::create([
                        'name' => 'Vilain',
                        'first_name' => 'Dominique',
                        'email' => 'dominique.vilain@hepl.be',
                        'password' => Hash::make('dominique')    
                        ]);
        User::create([
                        'name' => 'Dupont',
                        'first_name' => 'Myriam',
                        'email' => 'myriam.dupont@hepl.be',
                        'password' => Hash::make('myriam')    
                        ]);
        User::create([
                        'name' => 'Vivegnis',
                        'first_name' => 'Maëlle',
                        'email' => 'maelle.vivegnis@hepl.be',
                        'password' => Hash::make('maelle')    
                        ]);
        User::create([
                        'name' => 'Worontzoff',
                        'first_name' => 'Pierre',
                        'email' => 'pierre.worontzoff@hepl.be',
                        'password' => Hash::make('pierre')    
                        ]);
        User::create([
                        'name' => 'Lovinfosse',
                        'first_name' => 'Vinciane',
                        'email' => 'vinciane.lovinfosse@hepl.be',
                        'password' => Hash::make('vinciane')    
                        ]);
        User::create([
                        'name' => 'Parmentier',
                        'first_name' => 'François',
                        'email' => 'francois.parmentier@hepl.be',
                        'password' => Hash::make('francois')    
                        ]);
    }

}	
