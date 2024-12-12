<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;


class AuthController extends Controller
{


    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function submitRegister(RegisterRequest $request)
    {
        $data = $request->validated();
        //   dd($data);
        $user = User::create($data);
        Auth::login($user);
        return to_route('home');

    }

    public function submitLogin(LoginRequest $request)
    {
        // dd($request->all());
        $data = $request->validated();
        if (Auth::guard('web')->attempt($data)) {
            return to_route('home');
        } else if (Auth::guard('admin')->attempt($data)) {
            return to_route('admin.home');

        }
        return to_route('login')->withErrors(["password" => "email or password is incorrect"]);

    }


    public function logout()
    {
        Auth::logout();
        return to_route('home');
    }

}
