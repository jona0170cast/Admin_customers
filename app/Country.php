<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Country extends Model
{

	// cuando la tabla no se llama igual que el modelo, colocarla de la siguiente forma
	protected $table = "countrys";


    // para proteger que ingresen datos maliciosos desde el html por ejemplo
	protected $fillable = [
		'id','country'
	];

	// Uno a Mucho(hasMany)
	public function state()
	{
		// return $this->hasMany('App\State','id_country','id_country');

		return $this->hasMany('App\State');


	}  


}
