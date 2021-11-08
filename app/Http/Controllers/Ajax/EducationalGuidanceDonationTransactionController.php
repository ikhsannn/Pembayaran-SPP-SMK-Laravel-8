<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\EducationalGuidanceDonationTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationalGuidanceDonationTransactionController extends Controller
{
    public function getEducationalGuidanceDonationTransaction($id)
    {
        $educational_guidance_donation_transaction = EducationalGuidanceDonationTransactions::find($id);

        $statuses = [
            'Belum Lunas',
            'Lunas'
        ];
        
        return response()->json(['message' => 'Data berhasil diambil!', 'data' => [
            'student_identification_number' => $educational_guidance_donation_transaction->user->student_information->student_identification_number,
            'bill' => $educational_guidance_donation_transaction->user->student_information->educational_guidance_donation->bill,
            'educational_guidance_donation_transaction' => $educational_guidance_donation_transaction,
            'statuses' => $statuses
        ]]);
    }
}
