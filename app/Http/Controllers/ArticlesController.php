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
    public function create() {
        return view('articles.create');
    }
    public function store(ArticleRequest $request) {  // ①
        // ここでの validate が不要になった
 
        Article::create($request->validated());
        return redirect()->route('articles.index')
            ->with('message', '記事を追加しました。');
    }
    public function edit($id) {
        $article = Article::findOrFail($id);
 
        return view('articles.edit', compact('article'));
    }
    public function update($id, ArticleRequest $request) {
        // return redirect(url('articles', [$article->id]))
        return redirect()->route('articles.show', [$article->id])
            ->with('message', '記事を更新しました。');
    }
    public function destroy($id) {
        $article = Article::findOrFail($id);
 
        $article->delete();
 
        return redirect('articles')->with('message', '記事を削除しました。');
    }
}

