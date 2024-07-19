<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;


class articleController extends Controller
{
    //updateArticle



    public function createArticle()
    {

        return view ('articles.create-article');
    }

    public function updateArticle()
    {

        return view ('articles.update-article');
    }
    
    public function edit($id){

        $articles= article::find($id);

        return view('/articles/update-article',compact('articles'));


    } 




    public function  update(Request $request){

        $articles = article::find($request->id);
        $articles->name=  $request->name;
        $articles->description=  $request->description;
        $articles->price=  $request->price;
        $articles->dateExpirer= $request->dateExpirer;
        $articles->image=  $request->image;
        $articles->save();
        
        return dd($articles);

        
    }

    public function showProducts(){
        $articles= article::all();

        return view('articles.show-products', ['articles'=> $articles]);
    }

    public function store()
    {

        $articles= article::create([ 
            
            'name' => request('name'),
            'description'=> request('description'),
            'price'=> request('price'),
            'dateExpirer'=> request('dateExpirer'),
            'images'=> request('image'),

           ]);

      return redirect('/articles/show-products');

    } 

    

    


    public function delete($id){

        $articles = article::find($id);
        $articles->delete();

        return redirect('/articles/show-products');

    }
    





}
