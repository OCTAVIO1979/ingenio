<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        /* estas son las validaciones que le vamos a agregar al formullario del lado del servidor a demas de las que ya tiene en el lado del formulario */
        
        return [
            'name' => 'min:4 | max:120 | required',
            'email' => 'min:4 | max:250 | unique:users| required',
            'password' => 'min:4 | max:120 | required' 

        ];
    }
}
