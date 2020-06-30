<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome_post(Request $request){
        // dd($request->all());
        $nama = $request["first_name"] ." " . $request["last_name"];
        return view('welcome')->with('nama', $nama);
    }

}
