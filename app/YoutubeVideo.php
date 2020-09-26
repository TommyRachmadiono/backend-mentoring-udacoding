<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YoutubeVideo extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
