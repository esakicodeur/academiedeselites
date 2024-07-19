<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
        return [
            'objectifs' => 'required|min:10',
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'email' => 'required|min:3',
            'phone' => 'required|min:3',
            'adresse' => 'required|min:3',
            'code_postal' => 'required|min:3',
            'pays' => 'required|min:3',
            'ville' => 'required|min:3',
            'niveau' => 'required|min:3',
            'etablissement_actuel' => 'required|min:3',
            'accepte' => ['accepted', 'boolean'],
        ];
    }
}
