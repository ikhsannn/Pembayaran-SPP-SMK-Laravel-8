<?php

namespace Database\Seeders;

use App\Models\StudentInformation;
use Illuminate\Database\Seeder;

class StudentInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentInformation::create([
            'user_id' => 4,
            'student_class_id' => 3,
            'educational_guidance_donation_id' => 2,
            'student_identification_number' => '00' . mt_rand(100, 500) . '0' . mt_rand(500, 999) . mt_rand(1, 9),
            'school_year' => date('Y'),
            'gender' => 'Laki-laki',
            'phone_number' => '+6281347564738',
            'address' => 'Lorem ipsum dolor sit amet'
        ]);

        foreach (range(5, 104) as $key => $number) {
            StudentInformation::create([
                'user_id' => $number,
                'student_class_id' => mt_rand(1, 3),
                'educational_guidance_donation_id' => mt_rand(1, 2),
                'student_identification_number' => '00' . mt_rand(100, 500) . '0' . mt_rand(500, 999) . mt_rand(1, 9),
                'school_year' => date('Y'),
                'gender' => mt_rand(0, 1) === 0 ? 'Laki-laki' : 'Perempuan',
                'phone_number' => '+628' . mt_rand(100000, 999999) . mt_rand(100, 999) . $key,
                'address' => 'Lorem ipsum dolor sit amet'
            ]);
        }
    }
}
