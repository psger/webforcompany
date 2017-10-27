<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Flash;
use App\Http\Requests\UpdateUserRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $uid = Auth::id();
//        if($uid){
//            $user = User::findOrFail($uid);
//            view()->share('user','$user');
//            return view('edit',compact('user'));
//        }
//        else{
//            return view('index');
//        }
        return view('index');
    }
}
