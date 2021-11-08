<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalGuidanceDonationTransactions extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'spp_transaksi';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student_information()
    {
        return $this->belongsTo(StudentInformation::class);
    }
}
