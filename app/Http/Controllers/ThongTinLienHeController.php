<?php

namespace App\Http\Controllers;

use Aws\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ThongTinLienHeController extends Controller
{
    //
    public function lienhe(){
        $lienhe = DB::table('thongtinlienhe')->get();
        return view('admin.pageadmin.lienhe',compact('lienhe'));
    }
    public function addlienhe(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'ten' => 'required',
                'email' =>'required',
                'sdt' => 'required'
                // 'anh' => 'array'
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        DB::table('thongtinlienhe')->insert(['ten'=>$request->ten,'email'=>$request->email,'sdt'=>$request->sdt]);
        return redirect()->back()->with('message','Thêm Thông Tin Thành Công');
    }
    public function postlienhe(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'id' => 'required',
                'ten' => 'required',
                'email' =>'required',
                'sdt' => 'required'
                // 'anh' => 'array'
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        DB::table('thongtinlienhe')->where('id',$request->id)->update(['ten'=>$request->ten,'email'=>$request->email,'sdt'=>$request->sdt]);
        return redirect()->back()->with('message','Sửa Thành Công');
    }
    public function deletelienhe($id){
        // echo $id;
        DB::table('thongtinlienhe')->where('id',$id)->delete();
        return redirect()->back()->with('message','Xóa Thành Công');
    }
}
