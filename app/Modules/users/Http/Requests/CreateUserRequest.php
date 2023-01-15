<?php

namespace Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'user_name' => 'required|max:255|unique:users,user_name',
            'email' => 'required|max:255|unique:users,email|email:rfc,dns',
            'mobile' => 'required|regex:/[0-9]{6,20}/|unique:users,mobile',
            'password' => 'required|max:255|min:8|confirmed',
            'password_confirmation' => 'same:password',
        ];
    }

}
