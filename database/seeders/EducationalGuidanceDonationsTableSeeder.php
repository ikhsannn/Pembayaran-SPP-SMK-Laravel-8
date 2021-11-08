<?php

namespace Database\Seeders;

use App\Models\EducationalGuidanceDonation;
use Illuminate\Database\Seeder;

class EducationalGuidanceDonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EducationalGuidanceDonation::create([
            'educational_guidance_donation_code' => '001',
            'name' => 'Beasiswa',
            'bill' => 75000
        ]);

        EducationalGuidanceDonation::create([
            'educational_guidance_donation_code' => '002',
            'name' => 'Biasa',
            'bill' => 120000
        ]);
    }
}
