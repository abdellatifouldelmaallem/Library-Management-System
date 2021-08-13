<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ReaderController extends Controller
{

    public function index(){
       $articles=article::all();
       return view('reader.articles', compact('articles'));
    }


    public function store(Request $request){
        $article = article::create([
            'content'=>$request->content,
            'reader_id'=>$request->reader_id,
            'date'=>$request->date,
        ]);

        return $article;
    }


    public function showById($id){
        $article=article::find($id);
        return $article;
    }

    public function update(Request $request, $id){
        $article = article::find($id);
        $article->update([
            'content'=>$request->content,
            'reader_id'=>$request->reader_id,
            'date'=>$request->date,
        ]);
        
        return $article;
    }


    public function destroy($id)
    {
        return article::destroy($id);
    }

}
