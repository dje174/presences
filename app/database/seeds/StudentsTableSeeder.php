<?php 
class StudentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('students')->delete();

        Student::create([
                        'name' => 'Laplanche',
                        'first_name' => 'Antonin',
                        'email' => 'antonin@hepl.be',
                        'photo' => 'antonin.jpg',
                        'level_id' => Level::where('name','=','troisième année infographie')->first()->id  
                        ]);
        Student::create([
                        'name' => 'Latulipe',
                        'first_name' => 'Rose',
                        'email' => 'flowerpower@hepl.be',
                        'photo' => 'rose.jpg',     
                        'level_id' => Level::where('name','=','troisième année infographie')->first()->id  
                        ]);
        Student::create([
                        'name' => 'Louvrier',
                        'first_name' => 'Manuel',
                        'email' => 'iworkwithmyhands@hepl.be',
                        'photo' => 'manuel.jpg',   
                        'level_id' => Level::where('name','=','troisième année infographie')->first()->id  
                        ]);
        Student::create([
                        'name' => 'Mingare',
                        'first_name' => 'Guy',
                        'email' => 'letrain@hepl.be',
                        'photo' => 'guy.jpg',     
                        'level_id' => Level::where('name','=','troisième année infographie')->first()->id  
                        ]);
        Student::create([
                        'name' => 'Talu',
                        'first_name' => 'Jean',
                        'email' => 'tuning@hepl.be',
                        'photo' => 'jean.jpg',     
                        'level_id' => Level::where('name','=','troisième année infographie')->first()->id  
                        ]);
        Student::create([
                        'name' => 'Stark',
                        'first_name' => 'Eddard',
                        'email' => 'beheaded@hepl.be',
                        'photo' => 'eddard.jpg',     
                        'level_id' => Level::where('name','=','troisième année infographie')->first()->id  
                        ]);
    }

}