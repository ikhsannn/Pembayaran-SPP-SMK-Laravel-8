<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function getStudentClass($id)
    {
        $student_class = StudentClass::find($id);

        return response()->json(['message' => 'Data berhasil diambil!', 'data' => $student_class]);
    }
}
