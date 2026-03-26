<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestiominalRequest extends FormRequest
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
            
            'image_client'=>['required', 'extensions:jpg,png'],
              
            'content_uz'=>['required', 'max:455'],
            'content_ru'=>['required', 'max:455'],
            'content_en'=>['required', 'max:455'],

            'client_name_uz'=>['required', 'max:255'],
            'client_name_ru'=>['required', 'max:255'],
            'client_name_en'=>['required', 'max:255'],

        ];
    }

    public function messages()
    {
        
        return
         [
            'image_client.required'=>'Image_client tegini to\'ldiring!',
            'image_client.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',

            'content_uz.required'=>'Content_uz ni inputni to\'ldiring!',
            'content_ru.required'=>'Content_ru ni inputni to\'ldiring!',
            'content_en.required'=>'Content_en ni inputni to\'ldiring!',

            'client_name_uz.required'=>'Client_name_uz ni inputni to\'ldiring!',
            'client_name_ru.required'=>'Client_name_ru ni inputni to\'ldiring!',
            'client_name_en.required'=>'Client_name_en ni inputni to\'ldiring!',


         ];

    }
}
