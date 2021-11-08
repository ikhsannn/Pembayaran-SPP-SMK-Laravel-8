<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\EducationalGuidanceDonation;
use Illuminate\Http\Request;

class EducationalGuidanceController extends Controller
{
    public function getEducationalGuidanceDonation($id)
    {
        $educational_guidance_donation = EducationalGuidanceDonation::find($id);

        return response()->json(['message' => 'Data berhasil diambil', 'data' => $educational_guidance_donation]);
    }
}
