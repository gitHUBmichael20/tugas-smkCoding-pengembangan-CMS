<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
        protected $table = 'admin';
        // protected $hidden = ['password'];
        protected $fillable = ['username', 'email', 'password'];
}
