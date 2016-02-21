<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public fucntion user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
}
