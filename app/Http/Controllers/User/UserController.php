<?php

namespace App\Http\Controllers\User;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('user.index',compact('user'));
    }

    public function profile(){

        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function updateProfile(UserRequest $request){

        $validated = $request->validated();

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->age = $request->age;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        LogActivity::addToLog('User Updated Profile');

        return redirect()->back()->with('message', 'User Update Successfully');

    }



}
