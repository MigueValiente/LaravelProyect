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
          'job_name'      => ['required','min:5'],
          'description'   => ['required','min:10'],
          'province'      => ['required'],
          'payment'       => ['required','numeric'],
          'company'     => 'required|exists:companies,id',
          'category'      => ['required'],
          'expired_at'    => ['required', 'date']
        ];
    }

    public function messages()
    {
      return [
        'job_name.required'       => 'El :attribute es requerido',
        'job_name.min'            => 'El :attribute debe tener al menos 5 caracteres',
        'description.required'    => 'La :attribute es requerido',
        'description.min'         => 'La :attribute debe tener al menos 10 caracteres',
        'province.required'       => 'Debe seleccionar una :attribute',
        'payment.required'        => 'Debe introducir un :attribute',
        'payment.numeric'         => 'El :attribute no cumple con el formato requerido',
        'company.required' =>'Debe elegir una :attribute',
        'company.exists'    => 'La :attribute no existe',
        'category.required'       => 'Debe seleccionar una :attribute',
        'expired_at.required'     => 'La :attribute es requerida',
        'expired_at.date'         => 'La :attribute no cumple con el formato'
      ];
    }

    public function attributes()
    {
        return [
            'job_name'      => 'nombre del trabajo',
            'description'   => 'descripcion del trabajo',
            'province'      => 'provincia',
            'payment'       => 'sueldo',
            'category'      => 'categoria',
            'expired_at'    => 'fecha de expiracion'
        ];
    }
}
