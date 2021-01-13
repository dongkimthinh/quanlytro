<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        return view('admin.pageadmin.dashboard');
    }
    public function charts(){
        return view('admin.pageadmin.charts');
    }
}
