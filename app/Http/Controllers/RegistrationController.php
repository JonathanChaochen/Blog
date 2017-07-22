<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
  public function create()
  {
    return view('registration.create');
  }

  public function store()
  {
    //validate the form
    $this->validate(request(), [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:6'
      ]);


    //create and save the user
    $user = User::create( [
      'name' => request('name'),
      'email' => request('email'),
      'password' => bcrypt(request('password'))
    ]);

    //sign them in
    auth()->login($user);

    //redirect to the home
    return redirect()->home();

  }
}
