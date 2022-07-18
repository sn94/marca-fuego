<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required|string|max:255',
            'phone' => 'required_without:email|max:255',
            'email' => 'required_without:phone|email',
            'message' => 'required'
        ];
    }


    public  function attributes()
    {
        return   ['fullname' => 'Nombre completo', 'phone' => 'Numero de telefono/celular', 'message' => 'MENSAJE'];
    }
}
