<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = ['image', 'author', 'created_date', 'article_type', 'title', 'content'];
}
