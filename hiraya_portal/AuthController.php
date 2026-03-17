<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
   // public function login(Request $request)
    //{
      //  dd($request->all());
   // }
    //public function signup(Request $request)
    //{
      //  $request->validate([
        //'name' => 'required',
        //'username' => 'required',
        //'email' => 'required|email|unique:users',
        //'password' => 'required|min:6|confirmed',
        //'role' => 'required',
    //]);

    //User::create([
      //  'name' => $request->name,
       // 'username' => $request->username,
       // 'email' => $request->email,
        //'password' => Hash::make($request->password),
        //'role' => $request->role,
    //]);
      //  return redirect()->route('login');
        
       // dd($request->all());
    //}

    public function signup(Request $request)
{
  
$request->validate([
        'role' => 'required',
        'full_name' => 'required|string|max:255',
        'username' => 'required|string|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);
    $user = new User();

    $user->role = $request->role;
    $user->full_name = $request->full_name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);

    $user->save();

    return redirect('/login');
}

public function login(Request $request)
{
    $login = $request->input('login');
    $password = $request->input('password');

    $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    if(Auth::attempt([$field => $login, 'password' => $password])){
        return redirect('/dashboard');
    }

    // If login fails
    return back()->withErrors([
        'login' => 'Wrong username or password'
    ])->withInput();
}


}