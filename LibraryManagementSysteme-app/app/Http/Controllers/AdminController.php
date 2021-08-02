<?php

namespace App\Http\Controllers;

use App\Models\library;
use App\Models\reader;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // crud for reader
    public function indexForReader(){
        return reader::all();
    }

    public function showByIdReader($id){
        $reader=reader::find($id);
        return $reader;
    }

    public function destroyforReader($id)
    {
        return reader::destroy($id);
    }


    // crud for librarian
    public function indexforlibrary(){
        return library::all();
    }

    public function showByIdLibrary($id){
        $library=library::find($id);
        return $library;
    }

    public function destroyforlibrary($id)
    {
        return library::destroy($id);
    }

}
