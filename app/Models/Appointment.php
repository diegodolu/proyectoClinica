<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function Patients()
    {
        return $this->belongsTo(Patient::class);
    }

    public function Diagnoses()
    {
        return $this->belongsTo(Diagnosis::class);
    }

    public function Doctors()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function Payments()
    {
        return $this->hasOne(Payment::class);
    }



}
