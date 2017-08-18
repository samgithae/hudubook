<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::paginate(10);
        return view('article.index', compact('articles'));
    }
}
