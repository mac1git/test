<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Article;
use Carbon\Carbon;
 
class ArticlesController extends Controller {
 
    public function index() {
        $articles = Article::latest('published_at')->latest('created_at')
            ->where('published_at', '<=', Carbon::now())
            ->get();
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
    public function store(ArticleRequest $request) {  // ①
        // ここでの validate が不要になった
 
        Article::create($request->validated());
        return redirect('articles');
    }
}
