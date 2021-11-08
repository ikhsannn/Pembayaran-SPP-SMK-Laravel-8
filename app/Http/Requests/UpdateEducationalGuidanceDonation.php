<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEducationalGuidanceDonation extends FormRequest
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
            'educational_guidance_donation_code_edit' => 'required|min:2|max:191',
            'name_edit' => 'required|min:2|max:191',
            'bill_edit' => 'required|numeric|min:2'
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
            'educational_guidance_donation_code_edit.required' => 'ID SPP wajib diisi!',
            'educational_guidance_donation_code_edit.min' => 'ID SPP minimal :min karakter!',
            'educational_guidance_donation_code_edit.max' => 'ID SPP maksimal :min karakter!',

            'name_edit.required' => 'Jenis SPP wajib diisi!',
            'name_edit.min' => 'Jenis SPP minimal :min karakter!',
            'name_edit.max' => 'Jenis SPP maksimal :max karakter!',

            'bill_edit.required' => 'Tagihan wajib diisi!',
            'bill_edit.numeric' => 'Tagihan harus angka!',
            'bill_edit.min' => 'Tagihan minimal :min karakter!'
        ];
    }
}
