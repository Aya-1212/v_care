<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMajorRequest extends FormRequest
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
            "title" => "required|string|max:30|min:6",
        ];
        if($this->__isset('image')){
            $rules['image'] = 'required|image';
        }
        return $rules ;
    }
}
