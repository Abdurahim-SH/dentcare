<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'category_id'=>['required'],
            'title_uz'=>['required'],
            'title_ru'=>['required'],
            'title_en'=>['required'],
            'description_uz'=>['required'],
            'description_ru'=>['required'],
            'description_en'=>['required'],
            'content_uz'=>['required'],
            'content_ru'=>['required'],
            'content_en'=>['required'],
        ];
    }

    public function messages(){

        return 
        [

            'category_id.required'=>'Category_id ni inputni to\'ldiring!',
            'title_uz.required'=>'Title_uz ni inputni to\'ldiring!',
            'title_ru.required'=>'Title_ru ni inputni to\'ldiring!',
            'title_en.required'=>'Title_en ni inputni to\'ldiring!',
            'description_uz.required'=>'Description_uz ni inputni to\'ldiring!',
            'description_ru.required'=>'Description_ru ni inputni to\'ldiring!',
            'description_en.required'=>'Description_en ni inputni to\'ldiring!',
            'content_uz.required'=>'Content_uz ni inputni to\'ldiring!',
            'content_ru.required'=>'Content_ru ni inputni to\'ldiring!',
            'content_en.required'=>'Content_en ni inputni to\'ldiring!',

        ];

    }
}
