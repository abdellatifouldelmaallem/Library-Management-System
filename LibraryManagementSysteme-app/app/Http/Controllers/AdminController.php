<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\book;
use App\Models\library;
use App\Models\reader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
 // for the readers
    public function AllReaders(){
        $readers=User::where('type', 'reader')->get();
        return view('admin.allReaders',compact('readers'));
    }

    public function deleteReaders($id){
       $user= User::findOrFail($id);
       if($user->type!='reader'){
           return abort('404');
       }
       $user->delete();
       return redirect('/admin/allReaders');
    }


// for libraries
public function AllLibraries(){
    $librarian=User::where('type', 'librarian')->get();
    return view('admin.allLibraries',compact('librarian'));
}

   public function deleteLibrary($id){
    $user= User::findOrFail($id);
    if($user->type!='librarian'){
        return abort('404');
    }
    $user->delete();
    return redirect('/admin/allLibraries');
 }
 
// for articles
 public function AllArticles(){
     $articles = article::with('user')->get();
     
     return view('admin.allArticles',compact('articles'));
 }

 public function deleteArt($id){
     article::find($id)->delete();
     return redirect('/dashboard/articles');
 }

//  // for books
//  public function AllBooks(){
//      $books = book::with('library')->get();
//       return view('admin.allBooks',compact('books'));
//  }




}

