<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'name',
        'email',
        'status',
        'phone',
        'appointment_time'
    ];

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
