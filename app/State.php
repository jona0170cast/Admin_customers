<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// use App\User;

// use App\Country;

// use App\Role;

class State extends Model
{
    protected $table = "states";

   
	protected $fillable = [
		'id_state','states','id_country'
	];

    // de uno a uno hasOne
	public function country()
	{
		// return $this->belongsTo('App\Country','id_country','id_state');

		// para que la relacion funcione, tiene q tener la clave como country_id, en la 
		// tabla que va a buscar, y la otra tabla id nada mas
		// belogto pertenece
		return $this->belongsTo('App\Country');

		// return $this->hasOne('App\Country');

		
	}  
 
}
