<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pembaca extends Authenticatable
{
    use HasFactory;
    protected $table = 'pembaca';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email', 
        'username', 
        'password'
    ];
}