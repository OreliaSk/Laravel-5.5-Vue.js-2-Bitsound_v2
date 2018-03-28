<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function artist()
    {
        // un commentaire correspond à un artiste
        return $this->belongsTo('App\Artist');
    }
    
}
