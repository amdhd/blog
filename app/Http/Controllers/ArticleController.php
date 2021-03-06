<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index')->with(compact('articles'));
    }

    public function create()
    {
        return view('articles.create');

    }
   

    public function store(Request $request)
    {
        
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->save();

        return redirect()->route('article:index')->with(['alert-type' => 'alert-success','alert' => 'Your article saved']);
    }

    public function edit(Article $article)
    {
        return view('articles.edit')->with(compact('article'));

    }

    public function update(Article $article,Request $request )
    {
        $article->update($request->only('title', 'description'));
        return redirect()->route('article:index')->with(['alert-type' => 'alert-success','alert' => 'Your article saved']);


        

    }
}
