<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index (){
        $doctors = Doctor::simplePaginate( 12);
        return View('site.pages.doctors.index',compact('doctors'));
    }

}
