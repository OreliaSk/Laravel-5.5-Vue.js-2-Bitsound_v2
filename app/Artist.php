<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * Relations
     */

    public function user()
    {
        // un profil correspond à un user
        return $this->belongsTo('App\User');
    }

    public function comments()
    {   
        // un ou plusieurs commentaires correspondent à un artist
        return $this->hasMany('App\Comment');
    }
}
