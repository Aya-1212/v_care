<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index (){
        return View('site.pages.majors.index');
    }
}
