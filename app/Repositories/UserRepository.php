<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;

class UserRepository
{
    private $studentInformationRepository, $user;

    public function __construct(StudentInformationRepository $studentInformationRepository, User $user)
    {
        $this->user = $user;
        $this->studentInformationRepository = $studentInformationRepository;
    }

    public function allStudents()
    {
        return $this->user->with('student_information', 'student_information.student_class')->where('role_id', 4)->orderBy('name')->get();
    }

    public function find($id)
    {
        return $this->user->with('student_information', 'student_information.student_class')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->role_id = 4;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = $this->find($id);

        $user->role_id = 4;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return $user;
    }
}
