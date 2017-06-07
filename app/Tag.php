<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Workout;

class Tag extends Model
{
    public function workouts()
    {
        return $this->belongsToMany(Workout::class);
    }
}
