<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'unique:users|required|email',
            'password' => 'required|confirmed' //for confirmation field must be named ***_confirmation : password_confirmation
        ];
    }

    public function persist()
    {



        $data = $this->only(['name','email']);
        $data['password'] = bcrypt(request('password'));


        $user = User::create($data);


        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        //php artisan make:mail Welcome

    }
}
