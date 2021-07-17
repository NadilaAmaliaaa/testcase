<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Session;

class logincontroller extends Controller
{

    public function index(){
      return view('login');
    }

    public function cek(Request $req){
        $this->validate($req,[
        'Username'=>'required',
        'Password'=>'required'
        ]);
        $proses = Users::where('username',$req->Username)->where('password',($req->Password));
        if ($proses->count()>0) {
          $data = $proses->first();
          Session::put('id_user', $data->id_user);
          Session::put('username', $data->username);
          Session::put('password', $data->password);
          Session::put('nama', $data->nama);
          Session::put('login_status',true);
          return redirect('produk');
        } else {
          Session::flash('message', 'Email or Password is not valid!');
          return redirect('login');
        }
    }

    public function logout(){
      Session::flush();
      return redirect('/');
    }
}
