<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// agregamos el namespace del modelo para poder usar los metodos,relaciones etc
use App\User;

// use App\State;

// use App\Country;

// use App\Role;

class ApiController extends Controller
{
	
	// controlador para crear Api Rest

	public function index()
	{

		echo "Api Rest";

	}


	public function getUsers()
	{

		// con el metodo with() relaciono las 3 tablas de una vez
		$users = User::with('country')
		->with('state')
		->with('role')
		->get();				

		return response($users);
	}

		// public function getUsers()
	// {

	// 	$users = User::all();

	// 	return response()
	// 	->json($users);	


	// }



	// public function testRelaciones()
	// {		

	// 	// de esta forma accedo a todo
	// 	$countrys = State::with('country')->get();	

	// 	return response($countrys);

	// 	// return response()
	// 	// ->json($countrys);


 //        // de esta forma accedo a todo pero con objetos
 //        // donde ->country es el metodo creado en el modelo
	// 	// $countrys = State::all();	

	// 	// foreach ($countrys as $test ) {
	// 	// 	echo $test->country->country;
	// 	// }


	// 	// return response()
	// 	// ->json($countrys);


	// }



}
