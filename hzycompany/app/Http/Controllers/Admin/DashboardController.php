<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use session;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth.admin:admin');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $admin = auth('admin')->user();
        session()->put('admin',$admin);
        return view('admin.index');
    }

}