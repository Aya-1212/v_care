<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index (){
        return View('site.pages.appointments.index');
    }
}
