<?php

namespace App\Http\Controllers;

use App\Models\KhachHangModel;
use App\Models\TaiKhoanModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{

    //
    public function showlogin(){
        // $user = DB::table('taikhoan')->where('id_tk',36)->first();
        // print_r($user);


        return view('pages.login');
    }
    public function login(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'username' => 'required',
                'Password' => 'required'
            ],[
                'username.required' => 'Tên tài khoản không được trống',
                'Password.required' => 'Mật khẩu không được bỏ trống'
            ]);
            if($validator->fails()){
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
        }
        $remember = $request -> remember;
        if(Auth::guard('taikhoan')->attempt(['ten_tk'=>$request->username,'password'=>$request->Password,'quyen'=>'Khách hàng'])){
                // if(Auth::user()->quyen == 'Khách hàng'){
                        //
                        // $ten_tk = User::where('ten_tk', $request -> username)->first();
                        // $tenkh = KhachHangModel::where('id_kh', $ten_tk -> id_kh)->first();
                        // session() -> put('custommername',$tenkh -> tenkh);
                        return redirect()->route('index');
                // }
        } else{
            return redirect()->route('loginpost')->with('massage','Tài khoản hoặc mật khẩu không chỉnh xác');
        }
    }
    public function logout(){
        // if(session()->has('custommername')){
        //     session()->forget('custommername');
        // }
        // Auth::logout();
        Auth::guard('taikhoan')->logout();

        // Auth::guard('taikhoan')->session()->regenerateToken();
        return redirect()->route('index');
    }
}
