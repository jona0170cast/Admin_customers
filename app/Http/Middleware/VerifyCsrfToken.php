<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
         // importante agregar /* para eliminar el error 419 del token,
        // esto se aplica a todo lo relacionado a la ruta
    	'login/*','dashboard/*'
    ];
}
