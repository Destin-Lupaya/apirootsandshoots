<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMembreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [

            //'created_users_id' => 'required',
            'CodeMembre' => 'required',
            'Nom' => 'required',
            'PostNom' => 'required',
            'Prenom' => 'required',
            'Age' => 'required',
            'Sexe' => 'required',
            'ClassEtude' => 'required',
            'NiveauEtude' => 'required',
            'Numero' => 'required',
            'FonctionMembre' => 'required',
            'AdresseMembre',
            'mail' => 'required'
    
        ];
                return $rules;
    }
}
