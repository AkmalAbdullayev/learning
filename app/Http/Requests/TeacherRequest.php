<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users|email',
            'birthday' => 'required|date',
            'image' => 'required|image',
            'password' => 'required|min:8',
            'experience' => 'nullable',
            'subject' => 'required|array',
            'education_level' => 'required',
            'address' => 'nullable|string',
            'school' => 'nullable|string|max:255',
            'phone' => 'required',
            'biography' => 'nullable',
        ];
    }
}
