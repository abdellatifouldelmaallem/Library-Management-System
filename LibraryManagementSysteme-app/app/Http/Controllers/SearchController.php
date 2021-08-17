<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){
        if(isset($_GET['query'])){
            $search=$_GET['query'];
            $search_book=book::where('name','like','%' . $search .'%')->get();
            
            return view('search',['search_book'=>$search_book]);

        }else{

            return view('search');
        }
    }
}
