<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index (){
        $doctors = Doctor::with('major')->simplePaginate( 12);
        return View('site.pages.doctors.index',compact(var_name: 'doctors'));
    }

    public function show (int $major){
        $doctors = Doctor::with('major')->where('major_id',$major)->simplePaginate(12);
        return View('site.pages.doctors.index',compact(var_name: 'doctors'));
    }

    public function profile(Doctor $doctor){
        $doctor = Doctor::with('major')->findOrFail($doctor->id);
        return view('site.pages.doctors.doctor-profile',compact('doctor'));
    }


}
