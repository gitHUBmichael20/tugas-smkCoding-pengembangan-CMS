<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // Retrieve all articles from the database
        $articles = Article::all();

        // Return response in JSON format
        return response()->json([
            'success' => true,
            'data' => $articles
        ]);
    }
}
