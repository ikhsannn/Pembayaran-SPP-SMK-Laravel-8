<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationalGuidanceDonation extends FormRequest
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
            'educational_guidance_donation_code' => 'required|min:2|max:191',
            'name' => 'required|min:2|max:191',
            'bill' => 'required|numeric|min:2'
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
            'educational_guidance_donation_code.required' => 'ID SPP wajib diisi!',
            'educational_guidance_donation_code.min' => 'ID SPP minimal :min karakter!',
            'educational_guidance_donation_code.max' => 'ID SPP maksimal :min karakter!',

            'name.required' => 'Jenis SPP wajib diisi!',
            'name.min' => 'Jenis SPP minimal :min karakter!',
            'name.max' => 'Jenis SPP maksimal :max karakter!',

            'bill.required' => 'Tagihan wajib diisi!',
            'bill.numeric' => 'Tagihan harus angka!',
            'bill.min' => 'Tagihan minimal :min karakter!'
        ];
    }
}
