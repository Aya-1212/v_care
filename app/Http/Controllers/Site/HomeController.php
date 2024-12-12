<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $majors = Major::take(8)->get();
        $doctors =  Doctor::with('major')->take(12)->get();
        return View('site.pages.home',compact(['majors','doctors']));
    }
}
