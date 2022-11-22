<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class LoginRules extends Request
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
        $rules = [
        'email' => 'required|email',
        'password' => 'required',
        ];
        return $rules;
    }


    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'The email must be a valid email address.',
            'password.required' => 'Password is required',
        ];
    }

}
