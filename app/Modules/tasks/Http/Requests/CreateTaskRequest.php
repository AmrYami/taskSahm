<?php

namespace Tasks\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateTaskRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'admin_id' => Auth::user()->id,
        ]);
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'emp_id' => 'required',
        ];
    }
}
