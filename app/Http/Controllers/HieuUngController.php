<?php

namespace App\Http\Controllers;

use App\Models\HieuUngModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HieuUngController extends Controller
{
    //
    public function hieuung(){
        $hieuung = HieuUngModel::all();

        return view('admin.pageadmin.hieuung',compact('hieuung'));
    }
    public function hieuungsetting(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'hieuung' =>'required',
            ]);

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        $trangthai=HieuUngModel::where('trangthai', 'on')->get();
        if($trangthai){
            for($i=0;$i<count($trangthai);$i++){
                $trangthai[$i]=HieuUngModel::where('trangthai', 'on')->update(['trangthai'=>'Off']);
            }
        }
        // dd($trangthai);
        HieuUngModel::where('hieu_ung', $request->hieuung)->update(['trangthai'=>'On']);
        return redirect()->route('hieuung')->with('message','Tùy chỉnh thành công');
    }
}
