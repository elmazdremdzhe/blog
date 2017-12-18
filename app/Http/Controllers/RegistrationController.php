<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
   // @todo look into authentication laravel

    public function create()
    {
       return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(),[
           'name' => 'required',
           'email' => 'required|email',
            'password' => 'required|confirmed' //for confirmation field must be named ***_confirmation : password_confirmation
        ]);

        $user = User::create(request(['name', 'email', bcrypt('password')]));


        auth()->login($user);

        return redirect()->home();
    }
}
