<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            
            'title_uz'=>['required', 'max:55'],
            'title_ru'=>['required', 'max:55'],
            'title_en'=>['required', 'max:55'],
            'description_uz'=>['required', 'max:255'],
            'description_ru'=>['required', 'max:255'],
            'description_en'=>['required', 'max:255'],
            'image_first'=>['required', 'extensions:jpg,png'],
            'image_second'=>['required', 'extensions:jpg,png'],
            'image_third'=>['required', 'extensions:jpg,png'],
            'image_fourth'=>['required', 'extensions:jpg,png'],
            'image_fifth'=>['required', 'extensions:jpg,png'],

        ];
    }

    public function messages()
    {

        return 
        [

            'title_uz.required'=>'Title_uz ni inputni to\'ldiring!',
            'title_ru.required'=>'Title_uz ni inputni to\'ldiring!',
            'title_en.required'=>'Title_uz ni inputni to\'ldiring!',

            'description_uz.required'=>'Description_uz ni inputni to\'ldiring!',
            'description_ru.required'=>'Description_ru ni inputni to\'ldiring!',
            'description_en.required'=>'Description_en ni inputni to\'ldiring!',

            'image_first.required'=>'Image tegini to\'ldiring!',
            'image_second.required'=>'Image tegini to\'ldiring!',
            'image_third.required'=>'Image tegini to\'ldiring!',
            'image_fourth.required'=>'Image tegini to\'ldiring!',
            'image_fifth.required'=>'Image tegini to\'ldiring!',

            'image_firts.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'image_second.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'image_third.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'image_fourth.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',
            'image_fifth.extensions'=>'Rasim faqat jpg yoki png farmat bo\'lshi shart!',

        ];

    }
}
