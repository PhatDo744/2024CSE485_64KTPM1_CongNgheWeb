<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class classe extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasMany(student::class, 'class_id', 'id');
    }
}
