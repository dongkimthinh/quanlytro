<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    public function contact(){
        $lienhe = DB::table('gioithieu')->select('id','diachi','map')->get();
        $quanly = DB::table('thongtinlienhe')->select('ten','email','sdt')->get();
        return view('pages.contact',compact('lienhe','quanly'));
    }
    public function contractpost(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'ten' => 'required',
                'email' => 'required|email',
                'sdt'=>'required|digits:10',
                'noidung'=>'required',
            ],[
                'ten.required' => 'Tên Không Được Bỏ Trống',
                'email.required' => 'Email Không Được Bỏ Trống',
                'sdt.required' => 'Số Điện Thoại Không Được Bỏ Trống',
                'noidung.required' => 'Nội Dung Không Được Bỏ Trống',
                'email' => 'Bạn Phải Nhập Đúng Email',
                'digits' => 'Số Điện Thoại Không Hợp Lệ'
            ]);
            if($validator->fails()){
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $details = [
                'title' => 'Thông Tin Liên Hệ',
                'ten' => $request->ten,
                'email' => $request->email,
                'sdt' => $request->sdt,
                'noidung' => $request->noidung
            ];
            $mail = DB::table('thongtinlienhe')->select('email')->get();
            foreach($mail as $v){
                Mail::to($v->email)->send(new \App\Mail\ContactMail($details));
            }
            return redirect()->back()->with('message','Gủi Thông Tin Thành Công');
        }
    }
}
