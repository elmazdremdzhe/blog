<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;


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
           'email' => 'unique:users|required|email',
            'password' => 'required|confirmed' //for confirmation field must be named ***_confirmation : password_confirmation
        ]);


        $data = request(['name','email']);
        $data['password'] = bcrypt(request('password'));




        $user = User::create($data);


        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        //php artisan make:mail Welcome

        return redirect()->home();
    }
}
