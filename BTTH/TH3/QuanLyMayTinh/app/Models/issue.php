<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class issue extends Model
{
    use HasFactory;

    // Định nghĩa quan hệ với model Computer
    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
