<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function user()
    {
        // un profil correspond à un user
        return $this->belongsTo('App\User');
    }
}
