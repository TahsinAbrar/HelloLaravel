<?php

class HelloController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Hello Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HelloController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hi');
	}

}
