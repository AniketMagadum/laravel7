<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $casts = [
        'values' => 'array',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
