<?php

namespace App\Http\Requests;

use App\Http\Requests\CompanyRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

class CompanyRequestAjax extends CompanyRequest
{
   
    public function rules()
    {
        $rules = array();
        if($this->exists('name')){
          $rules['name'] = $this->validarNombre();
        }

        if($this->exists('address')){
            $rules['address'] = $this->validarDireccion();
        }

        if($this->exists('web')){
            $rules['web'] = $this->validarWeb();
        }

        if($this->exists('email')){
          $rules['email'] = $this->validarEmail();
        }

        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        $response = new JsonResponse([
          'name' => $errors->get('name'),
          'address' => $errors->get('address'),
          'web' => $errors->get('web'),
          'email' => $errors->get('email')
        ]);
        throw new ValidationException($validator,$response);
    }
}
