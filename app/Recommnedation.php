<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommnedation extends Model
{
    //
    protected $guarded = [];

    public function fromUser() {

        return $this->belongsTo(User::class, 'foreign_key', 'other_key');

    }

    public function toUser() {

        return $this->belongsTo(User::class, 'foreign_key', 'other_key');

    }



}
