<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentClass extends FormRequest
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
            'class_code' => 'required|min:2|max:191',
            'name' => 'required|min:2|max:191',
            'school_year' => 'required|numeric|min:2',
            'homeroom_teacher' => 'required|min:2|max:191'
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
            'class_code.required' => 'Kode kelas wajib diisi!',
            'class_code.min' => 'Kode kelas minimal :min karakter!',
            'class_code.max' => 'Kode kelas maksimal :min karakter!',

            'name.required' => 'Kelas wajib diisi!',
            'name.min' => 'Kelas minimal :min karakter!',
            'name.max' => 'Kelas maksimal :max karakter!',

            'school_year.required' => 'Tahun ajaran wajib diisi!',
            'school_year.numeric' => 'Tahun ajaran harus angka!',
            'school_year.min' => 'Tahun ajaran minimal :min karakter!',

            'homeroom_teacher.required' => 'Wali kelas wajib diisi!',
            'homeroom_teacher.min' => 'Wali kelas minimal :min karakter!',
            'homeroom_teacher.max' => 'Wali kelas maksimal :min karakter!',
        ];
    }
}
