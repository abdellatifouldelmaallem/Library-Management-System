<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use Illuminate\Http\Request;
use App\Models\reader;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // register for reader
    public function registerReader(Request $request){
    
        $info = $request->validate([
         'fullName'=>'required|string',
         'email'=>'required|string|unique:reader',
         'password'=>'required|string|confirmed',
        ]);

        $reader = reader::create([
            'fullName'=>$info['fullName'],
            'email'=>$info['email'],
            'password'=>bcrypt($info['password']),
        ]);
        
         $token= $reader->createToken('readerToken')->plainTextToken;
        
        $response = [
            'reader'=> $reader,
            'token'=>$token, 
        ];

        return response($response, 201);
    }

    // logout for reader
    public function logoutForReader(Request $request){
        $request->user()->currentAccessToken()->delete();
        
        return response('message:log out');
    }

    
    //login for reader
    public function loginReader(Request $request){

        $info = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string',
           ]);
   
          // check the email
          $reader = reader::where('email',$request['email'])->first();

          //check the password
          if(!$reader || !Hash::check($request['password'], $reader->password)){
             return response([
                'message'=>'your data can not let to access'
             ], 401);
          }
           
            $token= $reader->createToken('readerToken')->plainTextToken;
           
           $response = [
               'reader'=> $reader,
               'token'=>$token, 
           ];
   
           return response($response, 201);
    }

    ///////////////////////////////////////////////////////////////////////////

    // register for librarian
    public function registerLibrarian(Request $request){

        $info = $request->validate([
            'fullName'=>'required|string',
            'nameOfLibrary'=>'required|string',
            'email'=>'required|string|unique:reader',
            'password'=>'required|string|confirmed',
        ]);

        $librarian = Librarian::create([
            'fullName'=>$info['fullName'],
            'nameOfLibrary'=>$info['nameOfLibrary'],
            'email'=>$info['email'],
            'password'=>bcrypt($info['password']),
        ]);

        $token = $librarian->createToken('librarianToken')->plainTextToken;

        $response = [
            'librarian'=> $librarian,
            'token'=>$token, 
        ];

        return response($response, 201);
    }

    // login for librarian
    public function loginLibrarian(Request $request){

      
        $info = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string',
           ]);
   
          // check the email
          $librarian = Librarian::where('email',$request['email'])->first();

          //check the password
          if(!$librarian || !Hash::check($request['password'], $librarian->password)){
             return response([
                'message'=>'your data can not let to access'
             ], 401);
          }
           
            $token= $librarian->createToken('librarianToken')->plainTextToken;
           
           $response = [
               'librarian'=> $librarian,
               'token'=>$token, 
           ];
   
           return response($response, 201);
    }

    public function logoutLibrarian(Request $request){

        $request->user()->currentAccessToken()->delete();
        
        return response('message:log out');
    }



}
