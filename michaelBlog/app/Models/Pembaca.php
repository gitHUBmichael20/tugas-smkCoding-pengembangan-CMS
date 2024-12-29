<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembaca extends Model
{
    //
    protected $table = 'pembaca';
    protected $fillable = ['email', 'username', 'password'];
}
