<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'imagen' => 'required',
            'apellidos' => 'required|string',
            'nombres' => 'required|string',
            'dni' => 'required|numeric',
            'edad' => 'required|integer',
            'cumple' => 'required|date',
            'sexo' => 'required|string',
            'celular' => 'required|numeric',
            'direccion' => 'required|string',
            'distrito' => 'required|string',
            'rol' => 'required|string',
            'cargo' => 'required|string',
            'area' => 'required|string',
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
