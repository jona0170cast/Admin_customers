<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

	// cuando la tabla no se llama igual que el modelo, colocarla de la siguiente forma
	protected $table = "countrys";


    // para proteger que ingresen datos maliciosos desde el html por ejemplo
	protected $fillable = [
		'id_country','country'
	];  


}
