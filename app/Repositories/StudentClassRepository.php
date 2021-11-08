<?php

namespace App\Repositories;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassRepository
{
    private $student_class;

    public function __construct(StudentClass $studentClass)
    {
        $this->student_class = $studentClass;
    }

    /**
     * Get student classes order by depends on the parameters.
     * $column is a column field on database. Example = id, name, created_at.
     * $order by ascending or descending.
     * 
     * @param  string $column
     * @param  string $order
     * @return object
     */
    public function studentClassesOrderBy($column, $order = 'asc')
    {
        return $this->student_class->orderBy($column, $order);
    }

    /**
     * Find student classes by id.
     *
     * @param integer $id
     * @return object
     */
    public function find($id)
    {
        return $this->student_class->find($id);
    }

    /**
     * Store student classes
     *
     * @param  array $request
     * @return void
     */
    public function store(Request $request)
    {
        $student_class = $this->student_class;
        $student_class->class_code = $request->class_code;
        $student_class->name = $request->name;
        $student_class->school_year = $request->school_year;
        $student_class->homeroom_teacher = $request->homeroom_teacher;
        $student_class->save();

        return;
    }

    /**
     * Update student classes
     *
     * @param  array $request
     * @param  integer $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $student_class = $this->find($id);

        $student_class->class_code = $request->class_code_edit;
        $student_class->name = $request->name_edit;
        $student_class->school_year = $request->school_year_edit;
        $student_class->homeroom_teacher = $request->homeroom_teacher_edit;
        $student_class->save();

        return;
    }
}
