<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherFormRequest extends FormRequest
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
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'email' => 'required|min:3',
            'phone' => 'required|min:3',
            'adresse' => 'required|min:3',
            'code_postal' => 'required|min:3',
            'pays' => 'required|min:3',
            'ville' => 'required|min:3',
            'langues' => 'required|min:3',
            'etablissement_actuel' => 'required|min:3',
            'poste_occupe' => 'required|min:3',
            'duree' => 'required|min:3',
            'etablissement_precedent' => 'required|min:3',
            'experiences' => 'required|min:3',
            'diplomes' => 'required|min:3',
            'niveau' => 'required|min:3',
            'specialisation' => 'required|min:3',
            'certifications' => 'required|min:3',
            'plages' => 'required|min:3',
            'methodologie' => 'required|min:10',
            'motivation' => 'required|min:10',
            'jours' => ['array', 'exists:jours,id'],
            'matieres' => ['array', 'exists:matieres,id'],
            'niveaux' => ['array', 'exists:niveaux,id']
        ];
    }
}
