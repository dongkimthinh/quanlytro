<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhongModel;
use App\Models\TrangThietBiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrangThietBiController extends Controller
{
    //
    public function thietbi(){
        $thietbi = TrangThietBiModel::all();
        return view('admin.pageadmin.thietbi',compact('thietbi'));
    }
    public function thietbidelete($id){
        TrangThietBiModel::where('id_ttb',$id)->delete();
        return redirect()->route('thietbi')->with('thongbao','Xóa thành công');
    }
    public function thietbiadd(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'tenthietbi' => 'required',
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        if($request->hasFile('anh')){
                // $file = $request->anh('anh');
                // $file_Name = time().'_'. $file->getClientOriginalName();
                // $file -> move(public_path('img/userimg'),$file_Name);
                $file = $request -> anh;
                $file_Name = $file->getClientOriginalName();
                $file->move('public/ttb',$file_Name);
            } else{
                $file_Name='nomane.jpg';
            }
        $TrangThietBiModel = new TrangThietBiModel();
        $TrangThietBiModel -> ten_ttb = $request -> tenthietbi;
        $TrangThietBiModel -> hinh_ttb = $file_Name;
        $TrangThietBiModel->save();
        return redirect()->route('thietbi')->with('message','Thêm thiết bị thành công');
    }
    public function thietbiupdate(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'trangthietbi' => 'required',
                'id' => 'required',
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        if($request->hasFile('anh')){
            // $file = $request->anh('anh');
            // $file_Name = time().'_'. $file->getClientOriginalName();
            // $file -> move(public_path('img/userimg'),$file_Name);
            $file = $request -> anh;
            $file_Name = $file->getClientOriginalName();
            $file->move('public/ttb',$file_Name);
        } else{
            $file_Name='nomane.jpg';
        }
        TrangThietBiModel::where('id_ttb', $request->id)->update(['ten_ttb'=>$request->trangthietbi,'hinh_ttb'=>$file_Name]);
        return redirect()->route('thietbi')->with('message','Sửa Thiết Bị Thành Công');
    }
}
