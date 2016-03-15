<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = ['user_id', 'profile_photo_id', 'name', 'surname', 'gender', 'birth_date', 'location', 'interested_in', 'description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function profile_photo()
    {
        return $this->belongsTo('App\Image');
    }

    public function interests()
    {
        return $this->belongsToMany('App\Interest', 'profile_interest');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
