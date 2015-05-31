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

	public function marcas()
	{
		$marcas = DB::table('marcas')->get();
		return view('pages.marcas',compact('marcas'));
	}

	public function modelos($id)
	{
		$modelos = DB::table('modelos')->where('marca_id','=',$id)->get();
		return view('pages.modelos',compact('modelos'));
	}

	public function tutoriales($id)
	{
		$tutoriales = DB::table('tutoriales')->where('modelo_id','=',$id)->get();
		return view('pages.tutoriales',compact('tutoriales'));
	}

	public function tutorial($id)
	{
		$tutorial = DB::table('tutoriales')->where('id','=',$id)->first();
		$pasos = DB::table('pasos')->where('tutorial_id','=',$id)->get();
		return view('pages.tutorial',compact('tutorial','pasos'));
		//return View::make('pages.tutorial',array('tutorial'=>$tutorial,'pasos'=>$pasos));
	}

	public function login()
	{
		return view('pages.login');
	}
}