<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function apiResponse($data = [], $status = 200)
    {
        return response()->json($data, $status);
    }
}
