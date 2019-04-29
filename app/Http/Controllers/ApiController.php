<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// agregamos el namespace del modelo para poder usar los metodos etc
use App\User;

class ApiController extends Controller
{
	// controlador para crear Api Rest

	public function index()
	{

		echo "Api Rest";

	}


	public function getUsers()
	{

		$users = User::all();

		return response()
		->json($users);

	}


}
