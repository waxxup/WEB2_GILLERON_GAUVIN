<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateCommentsRequest extends Request
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
            'commentaire' => 'required|min:10',
        ];
    }

    public function messages(){

        return [

            'commentaire.required' => 'commentaire manquant',
            'commentaire.min' => 'Commentaire pas assez long',



        ];

    }
}
