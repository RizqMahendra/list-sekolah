<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolVerificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'school_id' => 'bail|required',
            'sender_name' => 'bail|required',
            'school_name' => 'bail|required',
            'position' => 'bail|required',
            'school_accreditation' => 'nullable',
            'school_address' => 'nullable',
            'school_phone' => 'nullable',
            'operational_hour' => 'nullable',
            'school_logo' => 'nullable|image',
            'school_photo' => 'nullable|array',
            'school_photo.*' => 'image',
            'school_description' => 'nullable',
            'costs' => 'nullable',
            'school_website' => 'nullable',
            'socials' => 'nullable',
            'majors' => 'nullable',
            'registration_time' => 'nullable',
            'test_results' => 'nullable'
        ];
    }
}
