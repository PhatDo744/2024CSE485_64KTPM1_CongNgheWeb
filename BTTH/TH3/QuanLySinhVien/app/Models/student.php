<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function classe()
    {
        return $this->belongsTo('App\Models\classe');
    }
}
