<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentInformation;
use App\Models\EducationalGuidanceDonationTransactions;
use Illuminate\Support\Facades\DB;

class EducationalGuidanceDonationTransactionResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.educational_guidance_donation_transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_information = StudentInformation::where('student_identification_number', $request->get('student_identification_number'))->first();

        $student_educational_guidance_donation_transaction = new EducationalGuidanceDonationTransactions();
        $student_educational_guidance_donation_transaction->user_id = $student_information->user->id;
        $student_educational_guidance_donation_transaction->month = $request->get('month');
        $student_educational_guidance_donation_transaction->paid_date = $request->get('paid_date');
        $student_educational_guidance_donation_transaction->amount_paid = $request->get('amount_paid');
        $student_educational_guidance_donation_transaction->bill = $request->get('bill');
        $student_educational_guidance_donation_transaction->is_paid = $request->get('is_paid');
        $student_educational_guidance_donation_transaction->save();

        return redirect()->route('admin.transaksi.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student_information = StudentInformation::where('student_identification_number', $request->get('student_identification_number_edit'))->first();
        $student_educational_guidance_donation_transaction = EducationalGuidanceDonationTransactions::find($id);
        $student_educational_guidance_donation_transaction->user_id = $student_information->user->id;
        $student_educational_guidance_donation_transaction->month = $request->get('month_edit') ?? $student_educational_guidance_donation_transaction->month;
        $student_educational_guidance_donation_transaction->paid_date = $request->get('paid_date_edit') ?? $student_educational_guidance_donation_transaction->paid_date;
        $student_educational_guidance_donation_transaction->amount_paid = $request->get('amount_paid_edit') ?? $student_educational_guidance_donation_transaction->amount_paid;
        $student_educational_guidance_donation_transaction->bill = $request->get('bill_edit') ?? $student_educational_guidance_donation_transaction->bill;
        $student_educational_guidance_donation_transaction->is_paid = $request->get('is_paid_edit') ?? $student_educational_guidance_donation_transaction->is_paid;
        $student_educational_guidance_donation_transaction->save();

        return redirect()->route('admin.transaksi.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EducationalGuidanceDonationTransactions::find($id)->delete();

        return redirect()->route('admin.transaksi.index')->with('success', 'Data berhasil dihapus!');
    }
}
