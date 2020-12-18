<?php

namespace App\Http\Requests\V1\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string:200',
            'email' => 'required|email|unique:' . User::class,
            'password' => 'required|string|min:6'
        ];
    }
}
