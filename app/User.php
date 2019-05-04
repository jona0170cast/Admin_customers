<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','first_name','last_name', 'email', 'password','country_id','state_id','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function role()
    {
        // para que la relacion funcione, tiene q tener la clave como role_id, en la 
        // tabla que va a buscar, y la otra tabla principal id nada mas
        // belogsto(pertenece a)
        return $this->belongsTo('App\Role');

        // belongsToMany(pertenece a muchos)
        // return $this->belongsToMany('App\Role');

        // HasOne(tiene uno)
        // return $this->HasOne('App\Role');

        // HasMany(tiene muchos)
        // return $this->HasMany('App\Role');           
    } 

    public function country()
    {

        return $this->belongsTo('App\Country');                  
    }

    public function state()
    {

        return $this->belongsTo('App\State');                  
    }   
}
