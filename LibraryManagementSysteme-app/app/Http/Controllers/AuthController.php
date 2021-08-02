<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reader;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
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
}
