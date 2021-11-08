<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Repositories\EducationalGuidanceDonationRepository;
use App\Repositories\StudentClassRepository;
use App\Repositories\StudentInformationRepository;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $userRepository,
        $studentClassRepository,
        $educationalGuidanceDonationRepository,
        $studentInformationRepository;

    public function __construct(UserRepository $userRepository, StudentClassRepository $studentClassRepository, EducationalGuidanceDonationRepository $educationalGuidanceDonationRepository, StudentInformationRepository $studentInformationRepository)
    {
        $this->userRepository = $userRepository;
        $this->studentClassRepository = $studentClassRepository;
        $this->educationalGuidanceDonationRepository = $educationalGuidanceDonationRepository;
        $this->studentInformationRepository = $studentInformationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', [
            'students' => $this->userRepository->allStudents(),
            'student_classes' => $this->studentClassRepository->studentClassesOrderBy('name')->get(),
            'educational_guidance_donations' => $this->educationalGuidanceDonationRepository->educationalGuidanceDonationOrderBy('name')->get()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        DB::beginTransaction();

        try {
            $user = $this->userRepository->store($request);

            $this->studentInformationRepository->store($request, $user->id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }

        return redirect()->route('admin.siswa.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit', [
            'user' => $this->userRepository->find($id),
            'student_classes' => $this->studentClassRepository->studentClassesOrderBy('name')->get(),
            'educational_guidance_donations' => $this->educationalGuidanceDonationRepository->educationalGuidanceDonationOrderBy('name')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        try {
            $user = $this->userRepository->update($request, $id);

            $this->studentInformationRepository->update($request, $user->id);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }

        return redirect()->route('admin.siswa.edit', $user->id)->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->find($id)->delete();

        return redirect()->route('admin.siswa.index')->with('success', 'Data berhasil dihapus!');
    }
}
