<?php

namespace App\Http\Requests\User;

use App\Http\Requests\WebRequest;
use Illuminate\Validation\Rules\Unique;

class StoreRequest extends WebRequest
{
    public function rules(): array
    {
        return [
            'first_name'=>['required','string','max:50','alpha'],
            'last_name'=>['required','string','max:50','alpha'],
            'patronymic'=>['required','string','max:50','alpha'],
            'email'=>['required','string','max:50','email','unique:users,email'],
            'phone'=>['required','string','max:50',],
            'login'=>['required','string','max:50','unique:users,login'],
            'password'=>['reqiered','string','min:5','max:50']
        ];
    }
}
