<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Recommendation extends Model
{
    //

    protected $guarded = [];

    public function fromUser() {

        return $this->belongsTo('App\User', 'from_user_id');

    }

    public function toUser() {

        return $this->belongsTo('App\User', 'to_user_id');

    }

}
