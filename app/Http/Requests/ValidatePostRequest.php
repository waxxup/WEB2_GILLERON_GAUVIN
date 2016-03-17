<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidatePostRequest extends Request
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

            'title'   => 'required|min:10',
            'description' => 'required|min:10'

        ];}

    public function messages(){

        return [


            'title.required' => 'Titre obligatoire',
            'title.min' => 'Titre > 10 caractères',
            'description.required' => 'Description obligatoire',
            'Description.min' => 'Description > 10 caractères'
        ];

    }
}
