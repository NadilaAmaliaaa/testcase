<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class registerController extends Controller
{
    public function index(Request $request)
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $this->validate($request,
            [
                'nama'=>'required',
                'password'=>'required',
                'username'=>'required'
            ]
        );
        Users::create([
            'nama'=>$request->nama,
            'password'=>$request->password,
            'username'=>$request->username
        ]);
        return redirect('login');
    }

}