<?php

class UserController extends BaseController {

	protected $user;
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = $this->user->store( Input::all() );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('users.show')->with('title','Mon profil');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('users.edit')->with('title','Modifier mon profil');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	$this->user->update($id, Input::all());

	return Redirect::route('users.show', $id);		//
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

	public function login() {
		return View::make('users.login')->with('title','Se connecter');
	}

	public function connect() {
		$user = array(
			'name' => Input::get('name'),
			'password' => Input::get('password')
	    );

	    if(Auth::attempt($user)){
	        return Redirect::route('home.index');
	    }
	    else{
	        return Redirect::route('login');
	    }
	}

	public function logout() {

		Auth::logout();
		return Redirect::route('login');
	}

}
