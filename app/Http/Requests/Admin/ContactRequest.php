<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            
            'name_contact'=>['required', 'max:255'],
            'email_contact'=>['required'],
            'subject_contact'=>['required', 'max:255'],
            'message_contact'=>['required', 'max:255'],

        ];
    }

    public function messages() 
    {

        return 
        [

            'name_contact.required'=>'Name_contact ni inputni to\'ldiring!',
            'email_contact.required'=>'Email_contact ni inputni to\'ldiring!',
            'subject_contact.required'=>'Subject_contact ni inputni to\'ldiring!',
            'message_contact.required'=>'Message_contact ni inputni to\'ldiring!',

        ];

    }
}
