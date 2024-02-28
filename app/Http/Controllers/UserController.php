<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index(){
        // 
        // return view('index');
    }

    //
    public function dashboard(){
        return view('admin.index');
    }

    //
    public function register(){
        //
        return view('register');
    }

    //
    public function create(Request $request, User $user){
        //
        $formData = $request->validate([
            'name' => 'required|min:5',
            "email" => ['required', 'email', Rule::unique('users')],
            'password' => 'required|min:5'
        ]);

        $user = new User();
        $user->name = $formData['name'];
        $user->email = $formData['email'];
        $user->password = $formData['password'];

        $user->save();
        auth()->login($user);

        return redirect()->route('listing.index')->with("success", "User created successfully.");
    }

    //
    public function login(){
        //
        return view('login');
    }

    //
    public function authenticate(Request $request){
        //
        $formData = $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:5'
        ]);

        if (auth()->attempt($formData)) {
            $request->session()->regenerate();
            return redirect()->route('listing.index')->with("success", "User logged in successfully.");
        }

        return back()->withErrors(["email" => "invalid creadentials"])->onlyInput('email');
        
    }

    // Logout
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route("login")->with('success', "Logout successfully");
    }
}