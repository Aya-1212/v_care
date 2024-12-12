<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPatientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            "name" => "required|string|max:50|min:3",
            "email" => "required|string|email|max:120",
        ];
        
         if ($this->__isset('password')
        //  has('password')
         ){
            $rules['password'] = 'required|string|min:8|confirmed';
         }

        return $rules;
    }
}
