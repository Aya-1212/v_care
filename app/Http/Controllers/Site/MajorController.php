<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{


    public function index (){
        $majors = Major::
        orderBy('id','DESC')->
        simplePaginate(7);
        return View('site.pages.majors.index', compact('majors'));
    }
}
