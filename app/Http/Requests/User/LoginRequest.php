<?php

namespace App\Http\Requests\User;

use App\Http\Requests\WebRequest;

class LoginRequest extends WebRequest
{
    public function rules(): array
    {
        return [
            'login'=>['required','string','max:50','exists:users,login'],
            'password'=>['required','string','min:5','max:50']
        ];
    }
}
