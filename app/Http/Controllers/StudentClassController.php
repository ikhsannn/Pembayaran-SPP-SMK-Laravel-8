<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentClass;
use App\Http\Requests\UpdateStudentClass;
use App\Repositories\StudentClassRepository;

class StudentClassController extends Controller
{
    private $studentClassRepository;

    public function __construct(StudentClassRepository $studentClassRepository)
    {
        $this->studentClassRepository = $studentClassRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.student_class.index', [
            'student_classes' => $this->studentClassRepository->studentClassesOrderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentClass $request)
    {
        $this->studentClassRepository->store($request);

        return redirect()->route('admin.kelas.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentClass $request, $id)
    {
        $this->studentClassRepository->update($request, $id);

        return redirect()->route('admin.kelas.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->studentClassRepository->find($id)->delete();

        return redirect()->route('admin.kelas.index')->with('success', 'Data berhasil dihapus!');
    }
}
