<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function index(){ 
        return view('login.index');
    }

    public function proseslogin(Request $request){
        // dd($request->password);
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $cek = $request->only(['username', 'password']);
        if(Auth::attempt($cek)) {
            return redirect()->route('home');
        } 

        else {
            return back()->with('Error', 'Gagal Login');
        }
        
    }
}
