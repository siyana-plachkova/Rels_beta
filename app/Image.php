<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = ['profile_id', 'photo_url'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
