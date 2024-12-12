<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    protected $fillable = ['grade_level', 'room_number'];

    public function students()
    {
        return $this->hasMany(student::class);
    }
}
