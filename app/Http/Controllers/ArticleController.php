<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Tag;
use App\Image;
use App\Article;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*mandamos la vista*/
        $articles = Article::all();
        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*retornamos vista*/
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->lists('name', 'id');
        return view('admin.articles.create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        /*validación*/
        $this->validate($request, [
            'title' => 'required|unique:articles|min: 5',
            'category_id' => 'required',
            'content' => 'required|min: 20',
            'user_id' => 'required',
            'image' => 'required'

        ]);
        /*trabajamos con la imagen*/
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = 'blog_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/images/articles';
            $file->move($path, $name);
        }
        #creamos Article
        $article = new Article($request->all());
        $article->user_id = Auth::user()->id;
        $article->save();

        /*guardamos en la tabla article_tag*/
        $article->tags()->sync($request->tag_id);
        
        #guardamos Image
        $image = new Image();
        $image->name = $name;
        //$image->article_id = $article->id;
        $image->article()->associate($article);
        $image->save();

        flash('Artículo creado con exito!', 'success')->important();
        return redirect()->route('admin.article.index');
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
        //
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
    }
}
