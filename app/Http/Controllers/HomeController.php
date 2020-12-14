<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Content\Article;
use App\Model\Content\Tag;

class HomeController extends Controller
{
    public function index()
    {   
        $articles = Article::latest()->paginate(6);
        $populars = Article::take(5)->get();
        $recents = Article::latest()->take(3)->get();
        $tags = Tag::all();

        return view('posts',[
            'articles' => $articles,
            'populars' => $populars,
            'recents' => $recents,
            'tags' => $tags,
        ]);
    }

    public function view($slug)
    {
        $article = Article::where('url_prefix',$slug)->first();
        $recents = Article::where('url_prefix','<>',$slug)->latest()->take(3)->get();

        return view('post',[
            'article' => $article,
            'recents' => $recents,
        ]);
    }
}
