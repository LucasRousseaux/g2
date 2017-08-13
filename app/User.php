<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Doctor;
use App\Patient;
use App\Recommendation;


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

    return $this->hasOne(Doctor::class);


    }

    public function patient() {

    return $this->hasOne(Patient::class);


    }

    // hasMany / belongsTo
    public function recommendFrom() {

        return $this-> hasMany(Recommendation::class, 'from_user_id');

    }

    // hasMany / belongsTo
    public function recommendTo() {

        return $this-> hasMany(Recommendation::class, 'to_user_id');

    }


    // hasMany / belongsTo
    public function followFrom() {

        return $this-> hasMany (Follow::class, 'from_user_id');

    }

    // hasMany / belongsTo
    public function followTo() {

        return $this-> hasMany (Follow::class, 'to_user_id');

    }


    public function coments()
    {
        $coments = $this->hasMany(Coment::class);

        return $coments;
    }
}
