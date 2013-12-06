<?php 
class CoursesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('courses')->delete();

        Course::create([
                        'level_id' => Level::where('name','=','première année infographie')->first()->id,
                        'year_id' => Year::where('name','=','2013-2014')->first()->id,
                        'name' => 'Projets Web',
                        'description' => 'Un cours durant lequel les étudiants font des projets web'    
                        ]);
        Course::create([
                        'level_id' => Level::where('name','=','deuxième année infographie')->first()->id,
                        'year_id' => Year::where('name','=','2013-2014')->first()->id,
                        'name' => 'Design Web',
                        'description' => 'Un cours durant lequel les étudiants apprennent CSS'    
                        ]);
        Course::create([
                        'level_id' => Level::where('name','=','deuxième année infographie')->first()->id,
                        'year_id' => Year::where('name','=','2013-2014')->first()->id,
                        'name' => 'Typographie',
                        'description' => 'Un cours de typographie pour les foules'    
                        ]);
        Course::create([
                        'level_id' => Level::where('name','=','deuxième année infographie')->first()->id,
                        'year_id' => Year::where('name','=','2013-2014')->first()->id,
                        'name' => 'Programmation côté serveur',
                        'description' => 'Un cours pour apprendre à programmer un serveur web avec PHP'    
                        ]);
    }

}