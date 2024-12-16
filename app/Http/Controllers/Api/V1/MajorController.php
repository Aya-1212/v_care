<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;

class MajorController extends ApiController
{
    public function index()
    {
        $majors = Major::all();
        return $this->apiResponse([
            "data" => $majors
        ], 200);
    }

    public function show($id)
    {
        $major = Major::findOrFail($id);
        return $this->apiResponse(["data" => $major]);
    }

    public function showDoctors($id)
    {
        $major = Major::find($id);
        if ($major) {
            $doctors = Doctor::where('major_id', $id)->get();
            return $this->apiResponse(["data" => $doctors]);
        }
        return $this->apiResponse([
            "error" => "This Major not Found"
        ],404);

    }

}
