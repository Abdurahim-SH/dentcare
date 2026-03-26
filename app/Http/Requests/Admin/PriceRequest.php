<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
            'content_uz'=>['required'],
            'content_ru'=>['required'],
            'content_en'=>['required'],
            'call_uz'=>['required', 'max:255'],
            'call_ru'=>['required', 'max:255'],
            'call_en'=>['required', 'max:255'],
            'phone'=>['required', 'numeric'],
            'image_teeth'=>['required', 'extensions:jpg,png'],
            'image_dental'=>['required', 'extensions:jpg,png'],
            'image_canal'=>['required', 'extensions:jpg,png'],

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
            'description_ru.required'=>'Description_ru ni inputni to\'ldiring!',
            'description_en.required'=>'Description_en ni inputni to\'ldiring!',

            'content_uz.required'=>'Content_uz ni inputni to\'ldiring!',
            'content_ru.required'=>'Content_ru ni inputni to\'ldiring!',
            'content_en.required'=>'Content_en ni inputni to\'ldiring!',

            'call_uz.required'=>'Call_uz ni inputni to\'ldiring!',
            'call_ru.required'=>'Call_ru ni inputni to\'ldiring!',
            'call_en.required'=>'Call_en ni inputni to\'ldiring!',
            'phone.required'=>'Phone ni inputni to\'ldiring!',
            'phone.numeric'=>'Phone inputi faqat son bo\'lish kerak!',

            'image_teeth.required'=>'Image tegini to\'ldiring!',
            'image_dental.required'=>'Image tegini to\'ldiring!',
            'image_canal.required'=>'Image tegini to\'ldiring!',

        ];

    }
}
