<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

//use App\Http\Requests;

//use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
//        if (is_null($article)) return ;

        return view ('articles.show', ['article' => $article]);
    }
}
