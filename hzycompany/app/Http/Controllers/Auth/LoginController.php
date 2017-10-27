<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }

     protected $redirectTo = '/';
    // 前台页面表单中的登录字段得修改,本示例中用"login"为登录字段
    protected $username = 'login';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    // 重写username方法
    public function username()
    {
        return 'login';
    }

    // 重写此方法
    protected function credentials(Request $request) {
        $login = $request->get('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        return [
            $field => $login,
            'password' => $request->get('password'),
        ];
    }

    //重写验证方法
//    protected function attemptLogin(Request $request)
//    {
//        if(Auth::attempt([$this->credentials($request),'active'=>1], $request->has('remember'))){
//            dd(guanliyuan);
//        }else
//            dd(putongyopnghu);
//    }

//    public function attemptLogin(Request $request)
//    {
//        $username = $request->input('username');
//        $password = $request->input('password');
//
//        // 验证用户名登录方式
//        $usernameLogin = $this->guard()->attempt(
//            ['username' => $username, 'password' => $password], $request->has('remember')
//        );
//        if ($usernameLogin) {
//            return true;
//        }
//
//        // 验证手机号登录方式
//        $mobileLogin = $this->guard()->attempt(
//            ['mobile' => $username, 'password' => $password], $request->has('remember')
//        );
//        if ($mobileLogin) {
//            return true;
//        }
//
//        // 验证邮箱登录方式
//        $emailLogin = $this->guard()->attempt(
//            ['email' => $username, 'password' => $password], $request->has('remember')
//        );
//        if ($emailLogin) {
//            return true;
//        }
//
//        return false;
//    }
//    public function authenticate()
//    {
//        if (Auth::attempt(['email' => $name, 'password' => $password], 1)) {
//            return redirect()->intended('/');
//        } else if (Auth::attempt(['name' => $name, 'password' => $password], 1)) {
//            return redirect()->intended('/');
//        }else{
//            redirect('login')->with('msg', '用户名或密码错误');
//        }
//    }
}
