<?php

namespace App\Http\Controllers;


use App\Helpers\LogActivity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function logActivity()
    {
        $logs = LogActivity::logActivityLists();
        return view('logs',compact('logs'));
    }
}
