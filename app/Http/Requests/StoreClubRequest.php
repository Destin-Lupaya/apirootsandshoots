<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClubRequest extends FormRequest
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
        'CodeClub' => 'required',
        'NomClub' => 'required',
        'AnneeAdhesion' => 'required',
        'CodeAffiliation' => 'required',
        'TypeAdhesion' => 'required',
        'NombreMembres' => 'required',
        'GroupeAge' => 'required',
        'AdresseClub' => 'required',
        'Territoire_Ville' => 'required',
        'Province' => 'required',
        'NomPresidentClub' => 'required',
        'NomCoordinateur' => 'required',
        'ProfessionCoordinateur' => 'required',
        'AdresseCoordinateur' => 'required',
        'Telephone' => 'required',
        'mail' => 'required'

    ];
            return $rules;
    }
}
