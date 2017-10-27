<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dash';
    protected $username = 'login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
        //$this->username = config('admin.global.username');
    }
    /**
     * 重写登录视图页面
     * @author 晚黎
     * @date   2016-09-05T23:06:16+0800
     * @return [type]                   [description]
     */
    public function showLoginForm()
    {
        return view('admin.adminlogin');
    }
    /**
     * 自定义认证驱动
     * @author 晚黎
     * @date   2016-09-05T23:53:07+0800
     * @return [type]                   [description]
     */
    /**
     * 这里是登录验证的 不能注释掉！！
     */
    protected function guard()
    {
        return auth()->guard('admin');
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

}
