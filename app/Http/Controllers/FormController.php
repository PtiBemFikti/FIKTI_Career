<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function index(){
        return view('registerAdmin',[
            "title" => "registration admin",
        ]);
    }

    public function store(Request $request)
    {
     
        
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => ['required','min:5','max:255'],
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flush('success', 'Registration successful! Please login');
        return redirect('/login/dashboard')->with('success', 'Registration successful! Please login');
        // dd('registrasi hasil');
    }
   
}
