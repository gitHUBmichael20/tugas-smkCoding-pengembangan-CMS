<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // Retrieve all articles from the database
        $articles = Article::all();

        // Pass the articles to the view
        return view('content.landing-pages', compact('articles'));
    }
}
