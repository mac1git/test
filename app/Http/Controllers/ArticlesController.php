<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use App\Tag;

class ArticlesController extends Controller {
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index', 'show']);
    }
 
    public function index() {
        $articles = Article::latest('published_at')->latest('created_at')
            ->published()
            ->get();
 
        return view('articles.index', compact('articles'));
    }
 
    public function show($id) {
        $article = Article::findOrFail($id);
 
        return view('articles.show', compact('article'));
    }
    public function create() {
        $tag_list = Tag::pluck('name', 'id'); // ①
 
        return view('articles.create', compact('tag_list'));
    }
 
    public function store(ArticleRequest $request) {
        $article = Auth::user()->articles()->create($request->validated());
        $article->tags()->attach($request->input('tags')); // ②
 
        return redirect()->route('articles.index')
            ->with('message', '記事を追加しました。');
    }
    
    public function edit(Article $article) {
        $tag_list = Tag::pluck('name', 'id'); // ③
 
        return view('articles.edit', compact('article', 'tag_list'));
    }
 
    public function update(Article $article, ArticleRequest $request) {
        $article->update($request->validated());
        $article->tags()->sync($request->input('tags')); // ④ 
 
        return redirect()->route('articles.show', [$article->id])
            ->with('message', '記事を更新しました。');
    }
    public function destroy($id) {
        $article = Article::findOrFail($id);
 
        $article->delete();
        return redirect('articles')->with('message', '記事を削除しました。');
    }
}