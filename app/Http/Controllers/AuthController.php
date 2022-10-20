<?php

namespace App\Http\Controllers;

use Auth;

class AuthController extends Controller
{
  /**
   * Handle an authentication attempt.
   *
   * @return Response
   */
  public function authenticate()
  {
    if (Auth::attempt(['email' => $email, 'senha' => $senha])) {
      // Authentication passed...
      return redirect()->intended('dashboard');
    }
  }
}
