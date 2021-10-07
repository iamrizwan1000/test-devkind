<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {

        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {

        $validated = $request->validated();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            LogActivity::addToLog('User Logged in');
            return redirect('/home')->with('message', 'User Logged in Successfully');
        }else{
            return redirect('/')->with('message', 'Email or Password Not correct');
        }
    }

    public function showRegister()
    {

        return view('auth.register');

    }

    public function register(RegisterRequest $request)
    {

        $validated = $request->validated();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->password = Hash::make($request->password);

        $user->save();
        LogActivity::addToLog('Registered New User');

        return redirect('/')->with('message', 'User Register Successfully, you can login here');


    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');

    }


}
