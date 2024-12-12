<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Mail\AppointmentConfirmationMail;
use App\Models\Appointment;
use App\Models\Doctor;
use Carbon\Traits\Timestamp;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Mail;

class AppointmentController extends Controller
{
    public function index()
    {

        $appointments = Appointment::with('doctor')->where('patient_id', auth()->user()->id)->get();
        
        return View('site.pages.appointments.index', compact('appointments'));
    }

    public function show(Doctor $doctor)
    {
        $doctor = Doctor::with('major')->findOrFail(id: $doctor->id);
        return View('site.pages.appointments.add', compact('doctor'));
    }

    public function store(AppointmentRequest $request)
    {
        // dd($request->email);
        $data = array_merge($request->validated(), ['patient_id' => auth()->user()->id,'appointment_time'=> now() ]);
        Appointment::create($data);
        Mail::to( $request->email ?? auth()->user()->email )->send( new AppointmentConfirmationMail() );
        return to_route('home')->with('added', 'Appointment Booked Successfully');
    }
}
