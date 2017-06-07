<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Workout extends Model
{
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
