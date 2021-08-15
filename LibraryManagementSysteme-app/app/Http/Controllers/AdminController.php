<?php

namespace App\Http\Controllers;

use App\Models\article;
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
 

 public function AllArticles(){
     $articles = article::with('user')->get();
     
     return view('admin.allArticles',compact('articles'));
 }


}

