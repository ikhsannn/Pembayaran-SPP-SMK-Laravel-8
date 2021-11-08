<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserOfficer extends FormRequest
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
            'name' => 'required|min:2|max:191',
            'email' => 'required|min:2|max:191',
            'password' => 'required|min:2|max:191',
            'role_id' => 'required'
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
            'name.required' => 'Nama wajib diisi!',
            'name.min' => 'Nama minimal :min karakter!',
            'name.max' => 'Nama maksimal :min karakter!',

            'email.required' => 'Email wajib diisi!',
            'email.min' => 'Email minimal :min karakter!',
            'email.max' => 'Email maksimal :max karakter!',

            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal :min karakter!',
            'password.max' => 'Password maksimal :max karakter!',

            'role_id.required' => 'Level wajib diisi!'
        ];
    }
}
