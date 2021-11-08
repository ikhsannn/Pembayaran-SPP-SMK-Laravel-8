<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserOfficer;
use App\Http\Requests\UpdateUserOfficer;
use App\Repositories\RoleRepository;
use App\Repositories\UserOfficerRepository;

class UserOfficerController extends Controller
{
    private $userOfficerRepository,
        $roleRepository;

    public function __construct(UserOfficerRepository $userOfficerRepository, RoleRepository $roleRepository)
    {
        $this->userOfficerRepository = $userOfficerRepository;
        $this->roleRepository = $roleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user_officer.index', [
            'user_officers' => $this->userOfficerRepository->highLevelUserOrderBy('name')->get(),
            'roles' => $this->roleRepository->roleWhereIn()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserOfficer $request)
    {
        $this->userOfficerRepository->store($request);

        return redirect()->route('admin.petugas.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserOfficer $request, $id)
    {
        $this->userOfficerRepository->update($request, $id);

        return redirect()->route('admin.petugas.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userOfficerRepository->find($id)->delete();

        return redirect()->route('admin.petugas.index')->with('success', 'Data berhasil dihapus!');
    }
}
