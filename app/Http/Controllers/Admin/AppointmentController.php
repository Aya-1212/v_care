<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function show(Doctor $doctor)
    {
        $doctor = Doctor::findOrFail($doctor->id);
        $appointments = Appointment::where('doctor_id', $doctor->id)->paginate(10);
        return view('admin.pages.appointments.index', compact('appointments'));
    }

    public function showDoctors()
    {
        $doctors = Doctor::with(['major'])->has('appointments')->paginate(10);
        return view('admin.pages.appointments.doctors', compact('doctors'));
    }

    public function edit(Appointment $appointment)
    {
        $appointment = Appointment::findOrFail($appointment->id);
        return view('admin.pages.appointments.edit-appointment', compact('appointment'));
    }

    public function update(Appointment $appointment)
    {
        $appointment->
        update(
            [
                "status" => request()->status,
            ]

        );
        return to_route('doctors.appointments.show',$appointment->doctor->id)->with('success', 'Appointment Updated Successfully');
    }
}
