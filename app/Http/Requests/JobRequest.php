<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
          'job_name' => ['required','min:5'],
          'creator' => ['required','min:5'],
          'description' => ['required','min:10'],
          'province' => ['required'],
          'payment' => ['required','numeric'],
          'category' => ['required'],
          'email_creator' => ['required','email'],
          'expired_at' => ['required', 'date']
        ];
    }

    public function messages()
    {
      return [
        'job_name.required' => 'El :attribute es requerido',
        'job_name.min' => 'El :attribute debe tener al menos 5 caracteres',
        'creator.required' => 'El :attribute es requerido',
        'creator.min' => 'El :attribute debe tener al menos 5 caracteres',
        'description.required' => 'La :attribute es requerido',
        'description.min' => 'La :attribute debe tener al menos 10 caracteres',
        'province.required' => 'Debe seleccionar una :attribute',
        'payment.required'  => 'Debe introducir un :attribute',
        'payment.numeric' => 'El :attribute no cumple con el formato requerido',
        'category.required' => 'Debe seleccionar una :attribute',
        'email_creator.required' => 'El :attribute es requerido',
        'email_creator.email' => 'El :attribute no cumple con el formato de email',
        'expired_at.required' => 'La :attribute es requerida',
        'expired_at.date' => 'La :attribute no cumple con el formato'
      ];
    }

    public function attributes()
    {
        return [
            'job_name'  => 'nombre del trabajo',
            'creator'   => 'nombre del creador',
            'description' => 'descripcion del trabajo',
            'province' => 'provincia',
            'payment' => 'sueldo',
            'category' => 'categoria',
            'email_creator' => 'email',
            'expired_at' => 'fecha de expiracion'
        ];
    }
}
