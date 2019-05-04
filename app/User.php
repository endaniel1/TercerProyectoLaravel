<?php

namespace Cinema;

use Illuminate\Database\Eloquent\SoftDeletes; //incluimos aqui la clases q SoftDeletes
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use SoftDeletes; //aqui utilizamos la clases bueno la mandoms a llamar
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at']; //aqui va a ser el datosde la tabla q hacmos refeencia
}
