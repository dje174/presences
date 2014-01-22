<?php

use Carbon\Carbon as Carbon;

class SessionsController extends BaseController {

	protected $session;

	public function __construct(CourseSession $session){
		$this->session = $session;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sessions = $this->session->get();
		$config = array(
		    'lang' => '',
		    'start_day' => 'monday',
		    'month_type' => 'long',
		    'show_next_prev' => true,
		    'local_time' => time()
		);

		Calendar::initialize($config);

        return View::make('sessions.index', compact('sessions'))->with('title','Bienvenue '.Auth::user()->first_name);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $session = $this->session->with('course')->findOrFail($id);

		$attendances = Attendance::all();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('sessions.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
