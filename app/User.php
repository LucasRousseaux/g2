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


    // hasOne / belongsTo
    public function doctor() {

    return $this->hasOne(Doctor::class);


    }

    public function patient() {

    return $this->hasOne(Patient::class);


    }

    // hasMany / belongsTo
    public function recommendations() {

        return $this-> hasMany (Recommendation::class, 'from_user_id');

    }

    // hasMany / belongsTo
    public function isRecommended() {

        return $this-> hasMany (Recommendation::class, 'to_user_id');

    }


    public function coments()
    {
        $coments = $this->hasMany(Coment::class);

        return $coments;
    }
}
