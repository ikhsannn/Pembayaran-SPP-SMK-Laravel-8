<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'student_identification_number' => 'required|min:2|max:191',
            'name' => 'required|min:2|max:191',
            'gender' => 'required|min:2|max:191',
            'email' => 'required|min:2|max:191',
            'password' => 'required|min:2|max:191',
            'student_class_id' => 'required',
            'educational_guidance_donation_id' => 'required',
            'school_year' => 'required|max:191',
            'phone_number' => 'required|min:2|max:191',
            'address' => 'required|min:2|max:191',
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
            'student_identification_number.required' => 'NIS wajib diisi!',
            'student_identification_number.min' => 'NIS minimal :min karakter!',
            'student_identification_number.max' => 'NIS maksimal :min karakter!',

            'name.required' => 'Nama wajib diisi!',
            'name.min' => 'Nama minimal :min karakter!',
            'name.max' => 'Nama maksimal :max karakter!',

            'gender.required' => 'Jenis kelamin wajib diisi!',
            'gender.min' => 'Jenis kelamin minimal :min karakter!',
            'gender.max' => 'Jenis kelamin maksimal :max karakter!',

            'email.required' => 'Email wajib diisi!',
            'email.min' => 'Email minimal :min karakter!',
            'email.max' => 'Email maksimal :max karakter!',

            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal :min karakter!',
            'password.max' => 'Password maksimal :max karakter!',

            'student_class_id.required' => 'Kelas wajib diisi!',

            'educational_guidance_donation_id.required' => 'Jenis SPP wajib diisi!',

            'school_year.required' => 'Tahun ajaran wajib diisi!',

            'phone_number.required' => 'Nomor handphone wajib diisi!',
            'phone_number.min' => 'Nomor handphone minimal :min karakter!',
            'phone_number.max' => 'Nomor handphone maksimal :max karakter!',

            'address.required' => 'Alamat wajib diisi!',
            'address.min' => 'Alamat minimal :min karakter!',
            'address.max' => 'Alamat maksimal :max karakter!',
        ];
    }
}
