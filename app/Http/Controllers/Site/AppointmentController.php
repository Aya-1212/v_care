<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Mail\AppointmentConfirmationMail;
use App\Models\Appointment;
use App\Models\Doctor;
use Mail;

class AppointmentController extends Controller
{
    public function index()
    {

        $appointments = Appointment::with('doctor')->where('patient_id', auth()->user()->id)->paginate(10);

        return View('site.pages.appointments.index', compact('appointments'));
    }

    public function show(Doctor $doctor)
    {
        $doctor = Doctor::with('major')->findOrFail(id: $doctor->id);
        return View('site.pages.appointments.add', compact('doctor'));
    }

    public function store(AppointmentRequest $request)
    {
        $data = array_merge($request->validated(), ['patient_id' => auth()->user()->id, 'appointment_time' => now()]);
        $appointment = Appointment::create($data);
        Mail::to(auth()->user()->email)->send(new AppointmentConfirmationMail(
            $appointment,
            auth()->user()->name,
        ));
        return to_route('home')->with('added', 'Appointment Booked Successfully');
    }
}
