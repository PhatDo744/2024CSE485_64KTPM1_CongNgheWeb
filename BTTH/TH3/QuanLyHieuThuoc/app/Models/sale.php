<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sale extends Model
{
    use HasFactory;
    public function medicine()
    {
        return $this->belongsTo(Computer::class);
    }
}
