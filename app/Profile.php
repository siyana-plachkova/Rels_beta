<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }

    public function interest()
    {
        return $this->belongsToMany('App\Interest', 'user_interest');
    }
}
