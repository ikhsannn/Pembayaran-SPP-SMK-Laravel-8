<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentClass extends FormRequest
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
            'class_code_edit' => 'required|min:2|max:191',
            'name_edit' => 'required|min:2|max:191',
            'school_year_edit' => 'required|numeric|min:2',
            'homeroom_teacher_edit' => 'required|min:2|max:191'
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
            'class_code_edit.required' => 'Kode kelas wajib diisi!',
            'class_code_edit.min' => 'Kode kelas minimal :min karakter!',
            'class_code_edit.max' => 'Kode kelas maksimal :min karakter!',

            'name_edit.required' => 'Kelas wajib diisi!',
            'name_edit.min' => 'Kelas minimal :min karakter!',
            'name_edit.max' => 'Kelas maksimal :max karakter!',

            'school_year_edit.required' => 'Tahun ajaran wajib diisi!',
            'school_year_edit.numeric' => 'Tahun ajaran harus angka!',
            'school_year_edit.min' => 'Tahun ajaran minimal :min karakter!',

            'homeroom_teacher_edit.required' => 'Wali kelas wajib diisi!',
            'homeroom_teacher_edit.min' => 'Wali kelas minimal :min karakter!',
            'homeroom_teacher_edit.max' => 'Wali kelas maksimal :min karakter!',
        ];
    }
}
