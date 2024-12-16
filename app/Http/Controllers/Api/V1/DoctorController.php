<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Doctor;

class DoctorController extends ApiController
{
    public function index()
    {
        $doctors = Doctor::all();
        return $this->apiResponse(["data" => $doctors],200);
    }

    public function show($id)
    {
        $doctor = Doctor::with('major')->findOrFail($id);
        return $this->apiResponse(["data" => $doctor],200);
    }



}
