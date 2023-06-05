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
<<<<<<< HEAD
        public function simpan(Request $request){
            User::create([
                'nik_user' => $request->nik_user,
                'nama_user'=> $request->nama_user,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
            ]);
            return redirect('/');
        }
=======
    public function simpan(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/');
    }
>>>>>>> 2c27dd67e87ca2e4868bc21a143a4e6f1e72ef9e
    public function login(){
        return view('/login');
    }
    public function ceklogin(Request $request){
<<<<<<< HEAD
        if(!Auth::attempt(['nama_user' => $request->nama_user, 'password' => $request->password])){
=======
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
>>>>>>> 2c27dd67e87ca2e4868bc21a143a4e6f1e72ef9e
            return redirect('/')->with('flash_error', 'Username atau Passoword Anda salah');
        }else{
            return redirect('/home')->with('flash_login','Anda Berhasil Login');
        }
    }
    public function home(){
        return view('home', ['key' => 'home'])->with('flash_login','Anda Berhasil Login');
    }
    public function logout(){
        Auth::logout();
        return view('/login');
    }
}
