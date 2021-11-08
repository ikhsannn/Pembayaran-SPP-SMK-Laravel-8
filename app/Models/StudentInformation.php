<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInformation extends Model
{
    use HasFactory;

    protected $table = 'informasi_murid';

    protected $guarded = [];

    public function student_class()
    {
        return $this->belongsTo(StudentClass::class);
    }

    public function educational_guidance_donation()
    {
        return $this->belongsTo(EducationalGuidanceDonation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
