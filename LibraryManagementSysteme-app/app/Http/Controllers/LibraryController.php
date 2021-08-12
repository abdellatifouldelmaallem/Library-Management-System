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

    

    // public function showById($id){
    //     $book=book::find($id);
    //     return $book;
    // }
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
          return $request;
        $request->validate([
            'name'=>'required',
            'price'=>'required|float',
            'image'=>'required|mins:jpg,png,jpeg|max:5048',
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
            'auther_id'=>$request->input('auther_id'),
            'category_id'=>$request->input('category_id'),
        ]);

        return redirect('/dashbord');
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
