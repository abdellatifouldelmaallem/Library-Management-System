<?php

namespace App\Http\Controllers;

use App\Models\auther;
use App\Models\book;
use App\Models\category;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function index(){
        $books=book::with(['auther','category'])->get();
        return view('library.books',compact('books'));
    }

    

    
// get names of category and auther in addBook
    public function createForAdd(){
        $authers=auther::all();
        $categories = category::all();
        return view('library.Add_Book',compact('authers','categories'));
    }
// get names of category and auther in EditBook
    public function createForEdit(){
        $authers=auther::all();
        $categories = category::all();
        return view('library.Update_book',compact('authers','categories'));
    }


    public function store(Request $request){
         
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'description'=>'required',
            'auther'=>'required',
            'category'=>'required',
        ]);

        $newImage=time() . "-" . $request->name .'.' . 
        $request->image->extension();

        $request->image->move(public_path('image'),$newImage);

        $books = book::create([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'image'=>$newImage,
            'description'=>$request->input('description'),
            'auther_id'=>$request->input('auther'),
            'category_id'=>$request->input('category'),
        ]);

        return redirect('/books');
    }

    public function showById($id){
        $books=book::find($id);
        $authers=auther::all();
        $categories = category::all();
        return view('library.Update_Book', ['books'=>$books , 'authers'=>$authers,'categories'=>$categories ]  );
    }
    

    
    public function update(Request $request, $id){
        $book = book::find($id);
          
        if($request->has('image')){
            $newImage=time() . "-" . $request->name .'.' . $request->image->extension();
           $request->image->move(public_path('image'),$newImage);
        }
        
        $book->update([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'image'=>$newImage??$book->image,
            'description'=>$request->input('description'),
            'auther_id'=>$request->input('auther'),
            'category_id'=>$request->input('category'),
        ]);
        
        return redirect('/books');
    }



    

}
