<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\TaiKhoanModel;
use App\Models\User as ModelsUser;
use App\User;
use Illuminate\Support\Facades\Hash;

use App\Models\AdminModel;

use App\Models\KhachHangModel;


class RegisterController extends Controller
{
    //
    public function register(){
        return view('pages.register');
    }
    public function store(Request $request){
        if($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'username' => 'required|min:5|max:50',
                'password' => 'required',
                'nhaplaimatkhau' => 'required|same:password',
                'email' => 'required|email',
                'fullname' => 'required',
                'gioitinh' => 'required|min:2|max:3',
                'sdt' => 'required|min:11|numeric',
            ],[
                'username.required' => 'Bạn phải nhập ít nhất 5 ký tự',
                'password.required' => 'Mật khẩu không được để trống',
                'nhaplaimatkhau.required' => 'Nhập lại mật khẩu không chỉnh xác',
                'email.required' => 'Email không hợp lệ',
                'fullname.required' => 'Bạn phải nhập đầy đử họ và tên',
                'gioitinh.required' => 'Bạn phải chọn giới tính',
                'sdt.required' => 'Số điện thoại không được để trống',
            ]);
            // echo $validator;
            if($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            // if($request->hasFile('anh')){
            //     // $file = $request->anh('anh');
            //     // $file_Name = time().'_'. $file->getClientOriginalName();
            //     // $file -> move(public_path('img/userimg'),$file_Name);
            //     $file = $request -> anh;
            //     $file_Name = $file->getClientOriginalName();
            //     $file->move('public/img/userimg',$file_Name);
            // } else{
            //     $file_Name='nomane.jpg';
            // }
            $user = DB::table('taikhoan')->where('ten_tk',$request->username)->first();
            if(!$user){
                // $duong = $request -> diachi;
                // $phuong = $request -> phuong;
                // $quan = $request -> quan;
                // print_r($duong.',Quận '.$quan);
                // die();
                $newkhachhang = new KhachHangModel();
                $newkhachhang -> tenkh = $request -> fullname;
                $newkhachhang -> sdt_kh = $request -> sdt;
                $newkhachhang -> email_kh = $request -> email;
                $newkhachhang -> gioitinh = $request -> gioitinh;
                $newkhachhang -> save();

                $id_kh = DB::table('khachhang')->where('tenkh',$request->fullname)->first('id_kh');

                $newUser = new TaikhoanModel();
                $newUser -> id_kh = $id_kh -> id_kh;
                $newUser -> ten_tk = $request -> username;
                $newUser -> password = Hash::make($request -> password);
                $newUser -> quyen = 'Khách hàng';
                $newUser -> save();
                return redirect()->route('registerpost')->with('message','Tạo tài khoản thành công mời đăng nhập');
            } else {
                return redirect()->route('registerpost')->with('message','Tài khoản đã tồn tại');
            }
        }
    }
}
