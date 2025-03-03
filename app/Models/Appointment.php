<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id','id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id','id');
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class);
    }

    public function labTests()
    {
        return $this->hasMany(LapTest::class);
    }
}
