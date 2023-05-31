<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function simpan(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login');
    }
    public function login(){
        return view('/login');
    }
    public function ceklogin(Request $request){
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/login')->with('flash_error', 'Username atau Passoword Anda salah');
        }else{
            return redirect('/mahasiswa')->with('flash_login','Anda Berhasil Login');
        }
    }
    public function home(){
        return view('home', ['key' => 'home'])->with('flash_login','Anda Berhasil Login');
    }
}
