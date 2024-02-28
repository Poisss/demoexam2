<?php

namespace App\Http\Requests\Apllication;

use App\Http\Requests\WebRequest;

class StoreRequest extends WebRequest
{
    public function rules(): array
    {
        return [
            'number_car'=>['required','string','max:11'],
            'description'=>['required','string','max:255'],
        ];
    }
}
