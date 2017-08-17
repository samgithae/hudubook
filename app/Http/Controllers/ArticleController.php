<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class ArticleController extends Controller
{

    public function index()
    {
        //
        $articles=Article::paginate(10);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articleContent='content';
        //initialise article model
        $article= new Article;

        $article->user_id= Auth::user()->id;
        $article->content= $request->$articleContent;
        $article->live= (boolean)$request->live;
        $article->post_on=$request->post_on;

        $article->save();


        return redirect('/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article= Article::findOrFail($id);
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article= Article::findOrFail($id);
        return view('article.edit',compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $article=Article::findOrFail($id);
        if(!isset($request->live))
            $article->update(array_merge($request->all(),['live'=>false]));
        else
        $article->update($request->all());
        return redirect('/articles');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article=Article::findOrFail($id);
        $article->delete();
        return redirect('/articles');

    }
}
