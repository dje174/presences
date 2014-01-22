<?php

class StudentController extends BaseController {

	protected $student;

	public function __construct(Student $student){
	    $this->student = $student;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('students.index',compact('students'))->with('title','Mes élèves');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$courses = Course::all();
		$levels = Level::all();
        return View::make('students.create', compact('student', 'courses', 'levels'))->with('title','Ajouter un élève');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();

		if( ! $this->student->fill($inputs)->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->student->errors);
		}

		if(Input::hasFile('photo'))
		{
			$file = Input::file('photo');
			$name = $this->student->name. '-'.time() . '.' . $file->getClientOriginalExtension();

			$file = $file->move(public_path().'/photoProfilStudents/',$name);

			$this->student->photo = $name;
		}

		$this->student->save();

		return Redirect::route('students.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		//return View::make('students.show')->with('title','Profil de l\'étudiant');
	//	return $student;
		$student = $slug;
        return View::make('students.show', compact('student'))->with('title','Profil de '.$student->first_name.' '.$student->name);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$student = $slug;
		$courses = Course::all();
		$levels = Level::all();
        return View::make('students.edit', compact('student', 'courses', 'levels'))->with('title','Modifier le profil');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		$student = $slug;
		$student->first_name=Input::get('first_name');
		$student->name=Input::get('name');
		$student->email=Input::get('email');
		if(Input::hasFile('photo'))
		{
			$file = Input::file('photo');
			$name = Input::get('nameStudent'). '-'.time() . '.' . $file->getClientOriginalExtension();

			$file = $file->move(public_path().'/photoProfilStudents/',$name);

			$this->student->photo = $name;
		}
		$student->level_id=Input::get('level');
		$student->save();
		return Redirect::route('students.index', compact('student'))->with('title','Mes élèves');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		$student = $slug;
		$student->delete();
		return Redirect::route('students.index')->with('title','Mes élèves');
	}

}
