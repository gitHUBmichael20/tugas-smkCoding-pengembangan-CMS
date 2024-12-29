<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penulis extends Model
{
    //
    use hasFactory;
    protected $table = 'penulis';
    protected $fillable = ['nama', 'email', 'password'];
}
