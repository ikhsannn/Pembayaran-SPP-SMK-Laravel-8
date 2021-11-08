<?php

namespace Database\Seeders;

use App\Models\StudentClass;
use Illuminate\Database\Seeder;

class StudentClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentClass::create([
            'name' => 'X RPL 1',
            'school_year' => date('Y'),
            'class_code' => '001',
            'homeroom_teacher' => 'Lorem ipsum'
        ]);

        StudentClass::create([
            'name' => 'XI RPL 1',
            'school_year' => date('Y'),
            'class_code' => '002',
            'homeroom_teacher' => 'Lorem ipsum'
        ]);

        StudentClass::create([
            'name' => 'XII RPL 1',
            'school_year' => date('Y'),
            'class_code' => '003',
            'homeroom_teacher' => 'Lorem ipsum'
        ]);
    }
}
