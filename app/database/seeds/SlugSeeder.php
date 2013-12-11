<?php 
class SlugSeeder extends Seeder {


    private $slugs;

    public function __construct()
    {
        $this->slugs = [];
    }

    public function run()
    {
        //Commençons par les étudiants
        $students = Student::all();
        foreach($students as $student){
            $student->slug = $this->getUniqueSlug([$student->first_name,$student->name]);
            $student->save();
        }

        $teachers = User::all();
        foreach($teachers as $teacher){
            $teacher->slug = $this->getUniqueSlug([$teacher->first_name,$teacher->name]);
            $teacher->save();
        }

        $courses = Course::with('year')->get();
        foreach($courses as $course){
            $course->slug = $this->getUniqueSlug([$course->name,$course->year->name]);
            $course->save();
        }
        
        $attendances = Attendance::all();
        foreach($attendances as $attendance){
            $attendance->slug = $this->getUniqueSlug([$attendance->status]);
            $attendance->save();
        }



    }

    private function getUniqueSlug($parts){

        $baseSlug = Str::slug(implode('-',$parts));
        
        $i = 1;
        
        while(in_array($baseSlug.($i>1?'-'.$i:''),$this->slugs))
        {
            $i++;
        }

        $this->slugs[] = $baseSlug.=($i>1?'-'.$i:'');

        return $baseSlug;

    }

}