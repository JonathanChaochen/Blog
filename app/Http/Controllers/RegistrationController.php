<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\User;

class RegistrationController extends Controller
{
  public function create()
  {
    return view('sessions.create');
  }

  public function store()
  {
    //validate the form
    $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:6'
      ]);


    //create and save the user
    $user = User::create( request(['name', 'email', 'password']) );

    //sign them in
    auth()->login($user);

    //redirect to the home
    return redirect()->home();

  }
}
