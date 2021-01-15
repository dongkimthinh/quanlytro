<?php

namespace App\Http\Controllers;

use Aws\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongTinLienHeController extends Controller
{
    //
    public function lienhe(){
        $lienhe = DB::table('thongtinlienhe')->get();
        return view('admin.pageadmin.lienhe',compact('lienhe'));
    }
    public function addlienhe(Request $request){
        if($request->isMethod('POST')){
            $validator = validator::make($request->all(),[
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
    }
}
