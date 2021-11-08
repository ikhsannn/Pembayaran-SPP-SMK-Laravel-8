<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserOfficer extends FormRequest
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
            'name_edit' => 'required|min:2|max:191',
            'email_edit' => 'required|min:2|max:191',
            'password_edit' => 'required|min:2|max:191',
            'role_id_edit' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name_edit.required' => 'Nama wajib diisi!',
            'name_edit.min' => 'Nama minimal :min karakter!',
            'name_edit.max' => 'Nama maksimal :min karakter!',

            'email_edit.required' => 'Email wajib diisi!',
            'email_edit.min' => 'Email minimal :min karakter!',
            'email_edit.max' => 'Email maksimal :max karakter!',

            'password_edit.required' => 'Password wajib diisi!',
            'password_edit.min' => 'Password minimal :min karakter!',
            'password_edit.max' => 'Password maksimal :max karakter!',

            'role_id_edit.required' => 'Level wajib diisi!'
        ];
    }
}
