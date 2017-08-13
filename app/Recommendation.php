<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Recommendation extends Model
{
    //

    protected $guarded = [];

    public function fromUser() {

        return $this->belongsTo(User::class, 'from_user_id');

    }

    public function toUser() {

        return $this->belongsTo(User::class, 'to_user_id');

    }

}
