<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EducationalGuidanceDonationTransactions;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private $searchString;

    public function __construct(Request $request)
    {
        $this->searchString = $request->get('query');
    }

    public function search()
    {
        $searchString = $this->searchString;

        if (is_null($searchString)) {
            return redirect()->route('home')->with('info', 'Kolom pencarian harus diisi!');
        }

        if (auth()->user()->role_id === 4) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }

        if (auth()->user()->role_id !== 4) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }

        if ($educational_guidance_donation_transactions) {
            $educational_guidance_donation_transactions;
        }else {
            return redirect()->route('home')->with('info', 'Data tidak ditemukan!');
        }

        return view('home', [
            'search_string' => $searchString,
            'educational_guidance_donation_transactions' => $educational_guidance_donation_transactions
        ]);
    }

    public function print($query)
    {
        $searchString = $query;

        if (auth()->user()->role_id !== 1) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }

        if (auth()->user()->role_id === 1) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }

        if (auth()->user()->role_id !== 2) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }

        if (auth()->user()->role_id === 2) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }


        if (auth()->user()->role_id !== 3) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }

        if (auth()->user()->role_id === 3) {
            $object = DB::select('call laporan_perbulan(?,?)',array("dashboard",$searchString));
            $educational_guidance_donation_transactions = json_decode(json_encode($object), true);
        }

        if ($educational_guidance_donation_transactions) {
            $educational_guidance_donation_transactions;
        }else {
            return abort(404);
        }

        return view('admin.educational_guidance_donation_transaction.print2', [
            'educational_guidance_donation_transactions' => $educational_guidance_donation_transactions
        ]);
    }
}
