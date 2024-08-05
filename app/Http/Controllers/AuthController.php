<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;


class AuthController extends Controller
{

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('movies.index')->with('success', 'Successful registration');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            if (!Auth::user()->hasVerifiedEmail()) {

                Auth::logout();
                return back()->with('error', 'Verify your email before logging in');
            }
            return redirect()->route('movies.index')->with('success', 'Successful login');
        }
        return back()->with('error', 'Incorrect credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Successful logout');
    }

}
