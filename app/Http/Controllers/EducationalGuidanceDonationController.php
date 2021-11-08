<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEducationalGuidanceDonation;
use App\Http\Requests\UpdateEducationalGuidanceDonation;
use App\Models\EducationalGuidanceDonation;
use App\Repositories\EducationalGuidanceDonationRepository;

class EducationalGuidanceDonationController extends Controller
{
    private $educationalGuidanceDonationRepository;

    public function __construct(EducationalGuidanceDonationRepository $educationalGuidanceDonationRepository)
    {
        $this->educationalGuidanceDonationRepository = $educationalGuidanceDonationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.educational_guidance_donation.index', [
            'educational_guidance_donations' => $this->educationalGuidanceDonationRepository->educationalGuidanceDonationOrderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEducationalGuidanceDonation $request)
    {
        $this->educationalGuidanceDonationRepository->store($request);

        return redirect()->route('admin.spp.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducationalGuidanceDonation $request, $id)
    {
        $this->educationalGuidanceDonationRepository->update($request, $id);

        return redirect()->route('admin.spp.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->educationalGuidanceDonationRepository->find($id)->delete();

        return redirect()->route('admin.spp.index')->with('success', 'Data berhasil dihapus!');
    }
}
