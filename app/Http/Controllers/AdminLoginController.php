<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\TaiKhoanModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    //
    public function loginadmin(){
        return view('admin.loginadmin');
    }
    public function loginadminpost(Request $request){
            if($request->isMethod('POST')){
                $validator = Validator::make($request->all(),[
                    'username' => 'required',
                    'password' => 'required'
                ],[
                    'username.required' => 'Tên tài khoản không được bỏ trống',
                    'password.required' => 'Mật khẩu không được bỏ trống'
                ]);
                if($validator->fails()){
                    return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
                }
            }
            if(Auth::attempt(['ten_tk' => $request -> username, 'password' => $request -> password ])){
                if(Auth::user()->quyen == 'Admin'){
                        //
                        $ten_tk = User::where('ten_tk', $request -> username)->first();
                        $tenad = AdminModel::where('id_ad', $ten_tk -> id_ad)->first();
                        session() -> put('admin',$tenad -> ten_admin);
                        return view('admin.pageadmin.dashboard');
                }
        } else{
            return redirect()->route('loginadmin')->with('massage','Tài khoản hoặc mật khẩu không chỉnh xác');
        }
    }
    public function logout(){
        if(session()->has('admin')){
            session()->forget('admin');
        }
        return redirect()->route('loginadmin');
    }
}
