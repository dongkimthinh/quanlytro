<?php

namespace App\Http\Controllers;

use App\Models\KhachHangModel;
use App\Models\TaiKhoanModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Nexmo\Laravel\Facade\Nexmo;


class LoginController extends Controller
{

    //

    public function checkpass($id){
        $date = new DateTime();
        $today = $date->format('Y-m-d H:i:s');
        $taikhoan = DB::table('taikhoan')->where('id_kh',$id)->first();
        $kt = date('Y-m-d H:i:s', strtotime('+5 minutes', strtotime($taikhoan->updated_at)));
        if($kt>=$today){
            return view('pages.checkpassword');
        } else {
            abort(404);
        }
        // $n=mktime(0,0,0,0,0,0,date("m"),date("d"),date("Y"),date("H"),date("i")-5,date("s"));
        // echo date("Y-m-d H:i:s",$n);
        // $ngay = $taikhoan->updated_at->modify('+1 day');
        // echo $ngay;
    }
    public function postcheckpass(Request $request,$id){
        $request->all();
        $date = new DateTime();
        $today = $date->format('Y-m-d H:i:s');
        $taikhoan = DB::table('taikhoan')->where('id_kh',$id)->first();
        $kt = date('Y-m-d H:i:s', strtotime('+5 minutes', strtotime($taikhoan->updated_at)));
        if($kt>=$today){
            if($request->isMethod('POST')){
                $validator = Validator::make($request->all(),[
                    'maxacthuc' => 'required',
                    'Password' => 'required',
                    'nhaplaimatkhau' => 'required|same:Password',
                ],[
                    'maxacthuc.required' => 'Mã Xác Thực Không Được Bỏ Trống!',
                    'Password.required' => 'Mật khẩu không được bỏ trống!',
                    'nhaplaimatkhau.required' => 'Nhập Lại Mật Khẩu Không Được Bỏ Trống!',
                    'same' => 'Nhập Lại Mật Khẩu Không Chính Xác',
                ]);
                if($validator->fails()){
                    return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
                }
                $checkmaxacthuc = DB::table('taikhoan')->where('phone_code',$request->maxacthuc)->count();
                // dd($checkmaxacthuc);
                if($checkmaxacthuc){
                    DB::table('taikhoan')->where('id_kh',$id)->update(['password'=>Hash::make($request->Password)]);
                    return redirect()->back()->with('message','Đổi Mật Khẩu Thành Công');
                } else {
                    return redirect()->back()->with('message','Mã Xác Thực Không Chính Xác');
                }
            }
        } else {
            abort(404);
        }



        // $n=mktime(0,0,0,0,0,0,date("m"),date("d"),date("Y"),date("H"),date("i")-5,date("s"));
        // echo date("Y-m-d H:i:s",$n);
        // $ngay = $taikhoan->updated_at->modify('+1 day');
        // echo $ngay;
    }
    public function showlogin(){
        // $user = DB::table('taikhoan')->where('id_tk',36)->first();
        // print_r($user);
        // echo route('about-us');
        $lienhe = DB::table('gioithieu')->select('id','diachi','map')->get();
        $quanly = DB::table('thongtinlienhe')->select('ten','email','sdt')->get();

        return view('pages.login',compact('lienhe','quanly'));
    }

    public function forgetpassword(Request $request){
        $data = $request->all();
        $date = new DateTime();
        // print_r($data['sdt']);
        if(!isset($data['sdt'])){
            $code = Str::random(6);
            $khachhang = DB::table('khachhang')->where('email_kh',$data['email'])->first();
            DB::table('taikhoan')->where('id_kh',$khachhang->id_kh)->update(['phone_code' => $code,'updated_at'=>$date->format('Y-m-d H:i:s')]);

            $details = [
                'phone_code' => $code,
                'url' => route('checkpass',$khachhang->id_kh),
            ];
            Mail::to($khachhang->email_kh)->send(new \App\Mail\ForgetPassword($details));
        } elseif(isset($data['sdt'])){
            $code = Str::random(6);
            $khachhang = DB::table('khachhang')->where('sdt_kh',$data['sdt'])->first();
            DB::table('taikhoan')->where('id_kh',$khachhang->id_kh)->update(['phone_code' => $code,'updated_at'=>$date->format('Y-m-d H:i:s')]);
            $details =[
                'phone_code' => $code,
                'url' => route('checkpass',$khachhang->id_kh),
            ];

            return Nexmo::message()->send([
                'to'   => $khachhang->sdt_kh,
                'from' => '0396739457',
                'text' => "{$code} is your identity code.Truy cập vào link:<a href='{$details['url']}'>{$details['url']}</a>"
            ]);
        }
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
