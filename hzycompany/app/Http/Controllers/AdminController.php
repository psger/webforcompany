<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Admin;
use Flash;
use Validator;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    /**
     * 显示添加学生页面
     */

    public function stuadd(){
        return view('admin.stuadd');
    }


    /**
     * 显示学生账号页面
     */
    public function stushow(){
        $info = User::all();
        //dd($info);
        return view('admin.stushow',compact('info'));
    }

    /**
     * 显示管理员账号页面
     */
    public function adminshow(){
        $admins = Admin::all();
        //dd($info);
        return view('admin.adminshow',compact('admins'));
    }

    /**
     *删除管理员
     */

    public function admindel($id){
        try{
            Admin::where('id',$id)->delete();
        }catch (\Exception $e){
            dd(出错了);
        }
        return redirect()->back();
    }

    /**
     * 显示添加管理员页面
     */
    public function adminadd(){
        return view('admin.adminadd');
    }

    /**
     * 显示所有学生信息
     */
    public function infoshow(){
        $infos = User::all();
        //dd($info);
        return view('admin.infoshow',compact('infos'));

    }


    /**
     * 添加学生账号
     */
    public function stuaddt(Request $request){

        $this->validate($request,[
            'name'=>'required|unique:users',
            'email'=>'email|unique:users',
            'password'=>'required|regex:/\w{6,20}/',
        ],[
            'name.required'=>'用户名不能为空',
            'name.unique'=>'用户名已经存在',
            'email.email'=>'邮箱格式不正确',
            'email.unique'=>'邮箱已经存在',
            'password.regex'=>'密码需在6-20位之间',
            'password.required'=>'请输入密码',
        ]);
        try{
            $user = new User;
            $user->name =$request->name;
            $user->interest = '';
            $user->password =Hash::make($request->password);
            $user->save();
            \Session::flash('flash_success', '添加用户成功');
        }catch (ImageUploadException $exception){

        }

        return redirect()->back();
    }

    /**
     * 删除学生
     */
    public function studel($id){
                try{
                User::where('id',$id)->delete();
                }catch (\Exception $e){
                    dd(出错了);
                }
                return redirect()->back();
    }

    /**
     *添加管理员
     */
    public function adminaddt(Request $request){

        $this->validate($request,[
            'name'=>'required|unique:admins',
            'email'=>'email|unique:admins',
            'password'=>'required|regex:/\w{6,20}/',
        ],[
            'name.required'=>'用户名不能为空',
            'name.unique'=>'用户名已经存在',
            'email.email'=>'邮箱格式不正确',
            'email.unique'=>'邮箱已经存在',
            'password.regex'=>'密码需在6-20位之间',
            'password.required'=>'请输入密码',
        ]);
        try{
            $admin = new Admin;
            $admin->name =$request->name;
            $admin->email = $request->email;
            $admin->password =Hash::make($request->password);
            $admin->save();
            \Session::flash('flash_success2', '添加用户成功');
        }catch (ImageUploadException $exception){

        }
        return redirect()->back();
    }

    /**
     * 只显示对日语感兴趣的学生信息
     */
    public function jpshow(){
        $jpinfo = User::where('interest',1)->get();
        return view('admin.onlyjp',compact('jpinfo'));
    }

/**
 * 管理员登陆
 */
public function adminlogin(){
       return view('admin.adminlogin');
}

/**
 *
 */
    /**
     * 显示修改页面
     */
    public function showpswedit(){
        return view('admin.editpsw');
    }
/**
 * 管理员修改密码
 */
    public function pswedit(Request $request){
//        $oldpassword = $request->input('oldpassword');
//        $password = $request->input('password');
//        $data = $request->all();
//        $rules = [
//            'oldpassword'=>'required|between:6,20',
//            'password'=>'required|between:6,20|confirmed',
//        ];
//        $messages = [
//            'required' => '密码不能为空',
//            'between' => '密码必须是6~20位之间',
//            'confirmed' => '新密码和确认密码不匹配'
//        ];
//        $validator = Validator::make($data, $rules, $messages);
//        $user = auth('admin')->user();
//        $validator->after(function($validator) use ($oldpassword, $user) {
//            if (!\Hash::check($oldpassword, $user->password)) {
//                $validator->errors()->add('oldpassword', '原密码错误');
//            }
//        });
//        if ($validator->fails()) {
//            return back()->withErrors($validator);  //返回一次性错误
//        }
//        $user->password = bcrypt($password);
//        $user->save();
//        return redirect('/admin/pswedit');
//
        $password = $request->password;
        $oldpassword = $request->oldpassword;
            if($input = $request->all()){
                $rules = [
                    'password'=>'required|between:6,20|confirmed',
                ];
                $message = [
                    'password.required'=>'新密码不能为空',
                    'password.between'=>'密码须在6到20位之间',
                    'password.confirmed'=>'两次密码不一致',
                ];
                $validator = Validator::make($input,$rules,$message);
                if($validator->passes()){
                    $user = auth('admin')->user();
                    if (!Hash::check($oldpassword, $user->password)) {
                       $validator->errors()->add('oldpassword', '原密码错误');
                       return back()->withErrors($validator);
                    }else{
                        $user->password = bcrypt($password);
                        $user->update();
                        return back()->with('msg','密码修改成功');
                    }
                }else{
                    //dd($validator->errors()->all());
                    return back()->withErrors($validator);
                }

            }
    }

}
