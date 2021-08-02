<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function index(){
        return book::all();
    }

    public function showById($id){
        $book=book::find($id);
        return $book;
    }


    public function store(Request $request){
        return book::create([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'price'=>$request->price,
            'auther_id'=>$request->auther_id,
            'category_id'=>$request->category_id,
        ]);
    }
    

    
    public function update(Request $request, $id){
        $book = book::find($id);
        $book->update([
            'name'=>$request->name,
            'image'=>$request->image,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'auther_id'=>$request->auther_id,
        ]);
        
        return $book;
    }



    public function destroy($id)
    {
        return book::destroy($id);
    }

    public function search($name){
        $book= book::where('name','like','%' . $name .'%')->get();
        return $book;
    }

}
