<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateValidationBap extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [




        ];}

    public function messages(){

        return [




        ];

    }
}