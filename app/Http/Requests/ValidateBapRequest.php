<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateBapRequest extends Request
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

            'type' => 'required',
            'title' => 'required|min:10',
            'client' => 'required|min:4',
            'adress' => 'required|min:6',
            'email' => 'required|min:6',
            'phone' => 'required|min:10',
            'presentation' => 'required|min:10',
            'contexte' => 'required|min:10',
            'demande' => 'required|min:10',
            'contraintes' => 'required|min:1',
            'objectif' => 'required|min:10'



        ];}

        public function messages(){

        return [

            'title.required' => 'titre manquant',
            'client.required' => 'client manquant',
            'adress.required' => 'adresse manquante',
            'email.required' => 'email manquant',
            'phone.required' => 'phone manquant',
            'presentation.required' => 'presentation manquante',
            'type.required' => 'type manquant',
            'contexte.required' => 'contexte manquant',
            'demande.required' => 'demande manquante',
            'objectif.required' => 'objectif manquant',
            'contraintes.required' => 'contraintes manquantes',
            'title.min' => 'Pas assez de lougueur pour le titre',
            'client.min' => 'Pas assez de lougueur pour le nom du client',
            'adress.min' => 'Pas assez de lougueur pour l adresse',
            'email.min' => 'Pas assez de lougueur pour le mail',
            'phone.min' => 'Pas assez de lougueur pour le téléphone',
            'presentation.min' => 'Pas assez de lougueur pour la présentation',
            'contexte.min' => 'Pas assez de lougueur pour le contexte',
            'demande.min' => 'Pas assez de lougueur pour la demande',
            'objectif.min' => 'Pas assez de lougueur pour les objectifs',
            'contraintes.min' => 'Pas assez de lougueur pour les contraintes'


        ];

    }
}
