<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    //
    use HasFactory;

    // Explicitly specify the table name
    protected $table = 'gallery';

    // Optional: Allow mass assignment for specific fields
    protected $fillable = ['title', 'image', 'author', 'captions'];
}
