<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\EducationalGuidanceDonation;

class EducationalGuidanceDonationRepository
{
    private $educational_guidance_donation;

    public function __construct(EducationalGuidanceDonation $educationalGuidanceDonation)
    {
        $this->educational_guidance_donation = $educationalGuidanceDonation;
    }

    /**
     * Get educational guidance donation order by depends on the parameters.
     *
     * @param  string $column
     * @param  string $order
     * @return object
     */
    public function educationalGuidanceDonationOrderBy($column, $order = 'asc')
    {
        return $this->educational_guidance_donation->orderBy($column, $order);
    }

    /**
     * Find educational guidance donation by id.
     *
     * @param  integer $id
     * @return object
     */
    public function find($id)
    {
        return EducationalGuidanceDonation::findOrFail($id);
    }

    /**
     * Store educational guidance donation.
     *
     * @param  array $request
     * @return void
     */
    public function store(Request $request)
    {
        $educational_guidance_donation = $this->educational_guidance_donation;
        $educational_guidance_donation->educational_guidance_donation_code = $request->educational_guidance_donation_code;
        $educational_guidance_donation->name = $request->name;
        $educational_guidance_donation->bill = $request->bill;
        $educational_guidance_donation->save();

        return;
    }

    /**
     * Update educational guidance donation by id.
     *
     * @param  array $request
     * @param  integer $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $educational_gudance_donation = $this->find($id);
        $educational_gudance_donation->educational_guidance_donation_code = $request->educational_guidance_donation_code_edit;
        $educational_gudance_donation->name = $request->name_edit;
        $educational_gudance_donation->bill = $request->bill_edit;
        $educational_gudance_donation->save();

        return;
    }
}
