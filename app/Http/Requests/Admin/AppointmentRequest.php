<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            
            'title_uz'=>['required', 'max:255'],
            'title_ru'=>['required', 'max:255'],
            'title_en'=>['required', 'max:255'],
            'description_uz'=>['required', 'max:455'],
            'description_ru'=>['required', 'max:455'],
            'description_en'=>['required', 'max:455'],

        ];
    }

    public function messages()
    {
        
        return
        [ 

            'title_uz.required'=>'Title_uz ni inputni to\'ldiring!',
            'title_ru.required'=>'Title_ru ni inputni to\'ldiring!',
            'title_en.required'=>'Title_en ni inputni to\'ldiring!',
            'description_uz.required'=>'Description_uz ni inputni to\'ldiring!',
            'description_ru.required'=>'Description_ru ni inputni t inputni o\'ldiring!',
            'description_en.required'=>'Description_en ni inputni to\'ldiring!',

        ];

    }
}
