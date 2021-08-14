<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\reader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReaderController extends Controller
{

    public function index(){
       $articles=article::where('reader_id',Auth::user()->id)->get();
       return view('reader.articles', compact('articles'));
    }

    // public function findReader($id){
    //     $articleId=article::find($id);
    //     $reader = user::all()->where('id',$articleId->id)->get();
    //     return view('reader.AddArticle',compact('reader'));
    // }


    public function store(Request $request){
         
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'date'=>'required',
        ]);

        $newImage=time() . "-" . $request->name .'.' . 
        $request->image->extension();

        $request->image->move(public_path('image'),$newImage);

        $article = article::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'reader_id'=>Auth::user()->id,
            'image'=>$newImage,
            'date'=>$request->input('date'),
        ]);

        return redirect('/Articles');
    }

    public function showById($id){
        $articles = article::find($id);
        return view('reader.UpdateArticle', ['articles'=>$articles]);
    }


    public function update(Request $request, $id){
        $article = article::find($id);
        
        if($request->has('image')){
            $newImage=time() . "-" . $request->title .'.' . $request->image->extension();
           $request->image->move(public_path('image'),$newImage);
        }

        $article->update([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'reader_id'=>Auth::user()->id,
            'image'=>$newImage??$article->image,
            'date'=>$request->input('date'),
        ]);
        
        return redirect('/Articles');
    }

    public function delete($id){
        article::find($id)->delete();
        return redirect('/Articles');
    }



}
