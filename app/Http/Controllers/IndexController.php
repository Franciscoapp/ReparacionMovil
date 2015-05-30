<?php namespace App\Http\Controllers;

//use Illuminate\Routing\Controller;
use DB;

class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	public function index()
	{
		return view('pages.index');
	}

	public function contacto()
	{
		$informacion = DB::table('informacioncontacto')->first();
		return view('pages.contacto',compact('informacion'));
	}

	public function tutorial()
	{
		return view('pages.tutorial');
	}
}