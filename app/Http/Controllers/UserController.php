<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */


  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */

  public function username()
  {
      return 'usuario';
  }

  public function login(Request $request)
  {
    if (Auth::attempt([
      "usuario"=>'bruno', // username
      "password"=> 'admin' // password
    ])) {
      $request->session()->regenerate();

      dd(Auth::user());

      return redirect()->route('home');
    }

    return back()->withErrors([
      'usuario' => 'The provided credentials do not match our records.',
    ]);
  }


}
