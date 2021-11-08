<?php

namespace App\Repositories;

use App\Models\StudentInformation;
use Illuminate\Http\Request;

class StudentInformationRepository
{
    private $student_information;

    public function __construct(StudentInformation $studentInformation)
    {
        $this->student_information = $studentInformation;
    }

    /**
     * Get student information where clause depends on the parameters.
     *
     * @param  string $column
     * @param  string $data
     * @return object
     */
    public function studentInformationWhere($column, $data)
    {
        return $this->student_information->where($column, $data);
    }

    /**
     * Store student information.
     * This method depends on storeUser() method on UserRepository.
     *
     * @param  array $request
     * @param  integer $user_id
     * @return void
     */
    public function store(Request $request, $user_id)
    {
        $student_information = $this->student_information;
        $student_information->user_id = $user_id;
        $student_information->student_class_id = $request->student_class_id;
        $student_information->educational_guidance_donation_id = $request->educational_guidance_donation_id;
        $student_information->student_identification_number = $request->student_identification_number;
        $student_information->school_year = $request->school_year;
        $student_information->gender = $request->gender;
        $student_information->phone_number = $request->phone_number;
        $student_information->address = $request->address;
        $student_information->save();

        return;
    }

    /**
     * Update student information.
     * This method depends on storeUser() method on UserRepository.
     *
     * @param  mixed $request
     * @param  mixed $user_id
     * @return void
     */
    public function update(Request $request, $user_id)
    {
        $student_information = $this->studentInformationWhere('user_id', $user_id)->first();
        $student_information->user_id = $user_id;
        $student_information->student_class_id = $request->student_class_id;
        $student_information->educational_guidance_donation_id = $request->educational_guidance_donation_id;
        $student_information->student_identification_number = $request->student_identification_number;
        $student_information->school_year = $request->school_year;
        $student_information->gender = $request->gender;
        $student_information->phone_number = $request->phone_number;
        $student_information->address = $request->address;
        $student_information->save();

        return;
    }
}
