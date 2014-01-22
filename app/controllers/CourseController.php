<?php

class CourseController extends BaseController {

	protected $course;

	public function __construct(Course $course){
	    $this->course = $course;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$levels = Level::all();
		$years = Year::all();
        return View::make('courses.index', compact('levels','years'))->with('title','Mes cours');
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
		$years = Year::all();
        return View::make('courses.create', compact('course','courses','levels','years'))->with('title','Créer un cours');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();

		if( ! $this->course->fill($inputs)->isValid())
		{
			return Redirect::back()->withInput()->withErrors($this->course->errors);
		}

		$this->course->save();

		return Redirect::route('courses.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$course = $slug;
		return View::make('courses.show', compact('course'))->with('title','Cours de '.$course->name);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$course = $slug;
		$courses = Course::all();
		$levels = Level::all();
		$years = Year::all();
        return View::make('courses.edit', compact('course','courses','levels','years'))->with('title','Modifier le cours');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		$course = $slug;
		$course->name=Input::get('name');
		$course->description=Input::get('description');
		$course->level_id=Input::get('level_id');
		$course->year_id=Input::get('year_id');
		$course->save();
		return Redirect::route('courses.index', compact('course'))->with('title','Mes cours');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		$course = $slug;
		$course->delete();
		return Redirect::route('courses.index')->with('title','Mes cours');
	}

}
