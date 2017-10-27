<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Flash;
use Validator;
use App\Http\Requests\UpdateUserRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::findOrFail($id);
        return view('edit',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about(){
        return view('about');
    }
    public function japanese(){
        return view('japanese');
    }
    public function questions(){
        return view('questions');
    }
    public function contact(){
        return view('contact');
    }
    public function edit(Request $request,$id)
    {
            $this->validate($request,[
                'real_name'=>'required',
                'email'=>'email',
            ],[
                'real_name.required'=>'真实姓名为空',
                'email'=>'邮箱格式不正确',
            ]);
             try {
                 $user = User::findOrFail($id);
                 //$this->authorize('update', $user);
                 $user->sex = $request->sex;
                 $user->email = $request->email;
                 $user->real_name = $request->real_name;
                 $user->grade = $request->grade;
                 $user->school = $request->school;
                 $user->tell = $request->tell;
                 $user->qq = $request->qq;
                 $user->name = $request->name;
                 $user->interest = $request->interest;
                 $user->save();
                 \Session::flash('flash_message', '信息修改成功');
//                 Flash::success(lang('修改成功.'));
             } catch (ImageUploadException $exception) {
//                 Flash::error(lang($exception->getMessage()));
             }
            return view('edit',compact('user'));
           // return redirect(route('user.edit',$id));

    }
    public function pswedits(Request $request)
    {
        $oldpassword = $request->input('oldpassword');
        $password = $request->input('password');
        $data = $request->all();
        $rules = [
            'oldpassword'=>'required|between:6,20',
            'password'=>'required|between:6,20|confirmed',
        ];
        $messages = [
            'required' => '密码不能为空',
            'between' => '密码必须是6~20位之间',
            'confirmed' => '新密码和确认密码不匹配'
        ];
        $validator = Validator::make($data, $rules, $messages);
        $user = Auth::user();
        $validator->after(function($validator) use ($oldpassword, $user) {
            if (!Hash::check($oldpassword, $user->password)) {
                $validator->errors()->add('oldpassword', '原密码错误');
            }
        });
        if ($validator->fails()) {
            return back()->withErrors($validator);  //返回一次性错误
        }
        $user->password = bcrypt($password);
        $user->save();
        Auth::logout();  //更改完这次密码后，退出这个用户
        return redirect('/login');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
