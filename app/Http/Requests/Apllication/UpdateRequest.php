<?php

namespace App\Http\Requests\Apllication;

use App\Http\Requests\WebRequest;

class UpdateRequest extends WebRequest
{
    public function rules(): array
    {
        return [
            'status'=>['required','in:новое,подтверждено,отклонено']
        ];
    }
}
