<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPenjualanController extends Controller
{
    public function index(Request $request)
    {
//        dd($request->session()->get('user'));
        return view('pages.admin.dashboard.dashboard-penjualan');
    }
}
