<?php

namespace App\Http\Controllers;

/*including Article instead of doing /app/Article::all();*/
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

    public function index() {
        /* Fetch all in table */
        $articles = Article::all();
        /*Return view with passed object*/
        return view('articles/index')->with('articles', $articles);
    }
    
    public function show($id){
        /*If null is returned, Fail will abort*/
        $article = Article::findOrFail($id);
        
        return view('articles/show', compact('article'));
    }
    
    public function create(){
        return view('articles/create');
    }

}
