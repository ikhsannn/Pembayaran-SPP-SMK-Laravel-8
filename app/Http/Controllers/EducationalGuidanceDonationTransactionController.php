<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EducationalGuidanceDonationTransactions;
use App\Models\StudentInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationalGuidanceDonationTransactionController extends Controller
{
    public function search(Request $request)
    {
        $student_information = StudentInformation::where('student_identification_number', $request->get('student_identification_number'))->first();

        if ($student_information) {
            // $student_educational_guidance_donation_transactions = EducationalGuidanceDonationTransactions::where('user_id', $student_information->user_id)->get();
            $student_educational_guidance_donation_transactions = DB::select('call laporan_perbulan(?,?)',array("cari",$student_information->user_id));
        }
        
        $array0 = json_decode(json_encode($student_educational_guidance_donation_transactions), true);

        // dd($array0);
        if ($student_information === null) {
            return redirect()->route('admin.transaksi.index')->with('info', 'Data tidak ditemukan!');
        }

        $month = DB::table('bulan')->get();
        $array1 = json_decode(json_encode($month), true);

        return view('admin.educational_guidance_donation_transaction.index', [
            'student_information' => $student_information ?? null,
            'student_educational_guidance_donation_transactions' => $array0 ?? null,
            'bulan' => $array1
        ]);
    }

    public function print($user_id)
    {
        $educational_guidance_donation_transactions = EducationalGuidanceDonationTransactions::where('user_id', $user_id)->get();

        if ($educational_guidance_donation_transactions->isEmpty()) {
            return redirect()->route('admin.transaksi.index')->with('info', 'Data tidak ditemukan!');
        }

        $student_information = User::where('id', $user_id)->first();

        return view('admin.educational_guidance_donation_transaction.print', [
            'student_information' => $student_information,
            'educational_guidance_donation_transactions' => $educational_guidance_donation_transactions
        ]);
    }
}
