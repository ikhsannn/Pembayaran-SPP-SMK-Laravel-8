<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserOfficerController extends Controller
{
  public function getUserOfficer($id)
  {
    $user_officer = User::find($id);
    $roles = Role::where('name', '!=', 'Siswa')->get();

    return response()->json(['message' => 'Data berhasil diambil!', 'data' => [
      'roles' => $roles,
      'user' => $user_officer
    ]]);
  }
}
