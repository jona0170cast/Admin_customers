<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{


    // para proteger que ingresen datos maliciosos desde el html por ejemplo
	protected $fillable = [
		'id_country','country'
	];  

    
}