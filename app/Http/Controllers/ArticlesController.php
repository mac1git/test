<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller {
 
    public function index() {
        $articles = Article::all();
 
        return view('articles.index', compact('articles'));
    }
 
    public function show($id) {
        $article = Article::findOrFail($id);
 
        return view('articles.show', compact('article'));
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request) {   // ①
        // ここでの validate が不要になった
 
        Article::create($request->validated());
        return redirect('articles');
    }
}