<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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

            // SERVICE 

            'title_uz'=>['required', 'max:255'],
            'title_ru'=>['required', 'max:255'],
            'title_en'=>['required', 'max:255'],
            'description_uz'=>['required', 'max:255'],
            'description_ru'=>['required', 'max:255'],
            'description_en'=>['required', 'max:255'],
            'after_image'=>['required', 'extensions:jpg,png'],
            'before_image'=>['required', 'extensions:jpg,png'],
            'cosmetic_image'=>['required', 'extensions:jpg,png'],
            'dental_image'=>['required', 'extensions:jpg,png'],
            'bridges_image'=>['required', 'extensions:jpg,png'],
            'teeth_image'=>['required', 'extensions:jpg,png'],

        ];
    }

    public function messages()
    {

        return [

            'title_uz.required'=>'Title_uz ni inputni to\'ldiring!',
            'title_ru.required'=>'Title_ru ni inputni to\'ldiring!',
            'title_en.required'=>'Title_en ni inputni to\'ldiring!',

            'description_uz.required'=>'Description_uz ni inputni to\'ldiring!',
            'description_ru.required'=>'Description_ru ni inputni to\'ldiring!',
            'description_en.required'=>'Description_en ni inputni to\'ldiring!',

            'after_image.required'=>'Image tegini to\'ldiring!',
            'before_image.required'=>'Image tegini to\'ldiring!',
            'cosmetic_image.required'=>'Image tegini to\'ldiring!',
            'dental_image.required'=>'Image tegini to\'ldiring!',
            'bridges_image.required'=>'Image tegini to\'ldiring!',
            'teeth_image.required'=>'Image tegini to\'ldiring!',

            'after_image.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'before_image.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'cosmetic_image.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'dental_image.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'bridges_image.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'teeth_image.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',

        ];

    }
}
