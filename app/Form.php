<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
