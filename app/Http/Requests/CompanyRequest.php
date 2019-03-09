<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        $rules = array();
        $rules['name'] = $this->validarNombre();
        $rules['address'] = $this->validarDireccion();
        $rules['web'] = $this->validarWeb();
        $rules['email'] = $this->validarEmail();
        return $rules;
        // return [
        //   'name'      => 'required|min:5',
        //   'address'   => ['required','min:10'],
        //   'web'       => 'required',
        //   'email'     => 'required|email'
        // ];
    }

    public function messages()
    {
        $mensajesNombre = $this->mensajeNombre();
        $mensajesDireccion = $this->mensajeDireccion();
        $mensajeWeb = $this->mensajeWeb();
        $mensajesEmail = $this->mensajesEmail();
        $mensajes = array_merge($mensajesNombre,$mensajesDireccion,$mensajeWeb,$mensajesEmail);
        return $mensajes;
        // return [
        //     'name.required'     => 'El :attribute es requerido.',
        //     'name.min'          => 'El :attribute debe tener al menos 5 caracteres',
        //     'address.required'  => 'El :attribute es requerido.',
        //     'address.min'       => 'El :attribute debe tener al menos 10 caracteres',
        //     'web.required'      => 'La :attribute es requerida.',
        //     'email.required'    => 'El :attribute es requerido',
        //     'email.email'       => 'El :attribute no cumple con los requisitos'
        // ];
    }

    protected  function validarNombre()
    {
      return 'required|min:5';
    }

    protected  function validarDireccion()
    {
      return 'required|min:10';
    }

    protected  function validarWeb()
    {
      return 'required';
    }

    protected  function validarEmail()
    {
      return 'required|email';
    }

    protected function mensajeNombre()
    {
      $mensajes = array();
      $mensajes['name.required']="El nombre es requerido";
      $mensajes['name.min']="El nombre debe tener un minimo de 5 caracteres";
      return $mensajes;
    }

    protected function mensajeDireccion()
    {
      $mensajes = array();
      $mensajes['address.required']="La direccion es requerida";
      $mensajes['address.min']="La direccion debe tener un minimo de 10 caracteres";
      return $mensajes;
    }

    protected function mensajeWeb()
    {
      $mensajes = array();
      $mensajes['web.required']="La web es requerida";
      return $mensajes;
    }

    protected function mensajesEmail()
    {
      $mensajes = array();
      $mensajes['email.required']="El email es requerido";
      $mensajes['email.email']="El email no cumple con el formato requerido";
      return $mensajes;
    }
}
