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
        'name', 'email', 'password', 'language'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // hasOne / belongsTo
    public function doctor() {

    return $this->hasOne('App\Doctor');


    }

    public function patient() {

    return $this->hasOne('App\Patient');


    }

    // hasMany / belongsTo
    public function recommendFrom() {

        return $this-> hasMany ('App\Recommendation', 'from_user_id');

    }

    // hasMany / belongsTo
    public function recommendTo() {

        return $this-> hasMany ('App\Recommendation', 'to_user_id');

    }


    // hasMany / belongsTo
    public function followFrom() {

        return $this-> hasMany ('App\Follow', 'from_user_id');

    }

    // hasMany / belongsTo
    public function followTo() {

        return $this-> hasMany('App\Follow', 'to_user_id');

    }


}
