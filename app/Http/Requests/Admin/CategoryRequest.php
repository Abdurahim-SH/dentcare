<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        return [
            'name_uz'=>['required'],
            'name_ru'=>['required'],
            'name_en'=>['required'],
        ];
    }

    public function messages(){
        
        return
         [

            'name_uz.required'=>'Name_uz ni inputni to\'ldiring!',
            'name_ru.required'=>'Name_ru ni inputni to\'ldiring!',
            'name_en.required'=>'Name_en ni inputni to\'ldiring!',

        ];
    }
}
