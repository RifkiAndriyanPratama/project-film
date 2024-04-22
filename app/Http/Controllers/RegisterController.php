<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);
        
        User::create($validatedData);

        return redirect('/login')->with('Success', 'Registrasi Berhasil');
    }

    
}
