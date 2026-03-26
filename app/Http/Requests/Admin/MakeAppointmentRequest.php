<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\MakeAppointment;

class MakeAppointmentRequest extends FormRequest
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
            'select_service'=>['required'],
            'select_doctor'=>['required'],
            'name'=>['required'],
            'email'=>['required','email', Rule::unique(MakeAppointment::class)],
            'select_date'=>['required'],
            'select_time'=>['required'],
        ];
    }

    public function messages(){
        return 
        [
            'select_service.required'=>'Select_Service ni inputni to\'ldiring!',
            'select_doctor.required'=>'Select_Doctor ni inputni to\'ldiring!',
            'name.required'=>'Name ni inputni to\'ldiring!',
            'email.required'=>'Email ni inputni to\'ldiring!',
            'email.unique'=>'Bunday email mavjud!',
            'select_date.required'=>'Select_Date ni inputni to\'ldiring!',
            'select_time.required'=>'Select_Time ni inputni to\'ldiring!',
        ];
    }
}
