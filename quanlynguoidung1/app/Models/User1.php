<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $fillable = ['username', 'email', 'hashed_password', 'role'];
}
