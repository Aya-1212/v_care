<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;

class AuthController extends ApiController
{
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        $token = $user->createToken('token_name')->plainTextToken;
        return $this->apiResponse([
            "data" => $user,
            "token" => $token
        ],200);
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            $user = User::where('email', $data['email'])->first();
            // dd($user);
            $token = $user->createToken("token_name")->plainTextToken;
            return $this->apiResponse([
                "data" => $user,
                "token" => $token
            ],200);
        }
        return $this->apiResponse([
            "error" => "The email or the password is invalid"
        ], 422);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return $this->apiResponse([
            "message" => "Logged Successfuly"
        ],200);
    }
}
