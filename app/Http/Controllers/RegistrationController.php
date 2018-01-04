<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    //
   // @todo look into authentication laravel

    public function create()
    {
       return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {

        //this is very specific to create user in Request class.
        // More often, we should do it right here or in a model.


        $request->persist();

session()->flash('message', "thank so much for signing up");


        return redirect()->home();
    }
}
