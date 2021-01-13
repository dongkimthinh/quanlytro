<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhongModel;
use App\Models\PhongModel;
use App\Models\TrangThietBiModel;

use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    //
    public function typerooms($id){
        $phong = PhongModel::where('id_loai_phong', $id)->get();

        $loai = LoaiPhongModel::where('id_loai_phong', $id)->first();

        $ttb = TrangThietBiModel::all();
        $gioithieu = DB::table('gioithieu')->select('id','diachi')->get();
        // dd($ttb);
        return view('pages.type-room',compact('phong','loai','ttb','gioithieu'));
    }
    public function typeroomss($id){
        $phong = PhongModel::where('id_loai_phong', $id)->get();

    }
    public function typeroomsadmin(){
        $loai = LoaiPhongModel::all();
        $arr =array();
        // echo count($loai);
        // die();
        for($i=1;$i<=count($loai);$i++){

            $phong = PhongModel::where('id_loai_phong', $i)->count();
            array_push($arr,$phong);
        }

        $loaiphong = LoaiPhongModel::all();
        // print_r($loaiphong);
        // dd($ttb);
        // $loaiphong= DB::table('phong')->join('loai_phong','loai_phong.id_loai_phong','=','phong.id_loai_phong')
        // ->join('trang_thiet_bi','trang_thiet_bi.id_ttb','=','loai_phong.id_ttb')->get();
        $ttb = TrangThietBiModel::all();
        // dd($ttb);
        $thietbi = LoaiPhongModel::select('trangthietbi')->get();
        // dd($thietbi);
        return view('admin.pageadmin.typeroom',compact('loaiphong','arr','ttb','thietbi'));
    }
    public function typeroomsadminadd(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'loaiphong' => 'required',
                'thietbi' =>'required|array',
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        $arr = array();
        // for($i=0;$i<count($request->thietbi);$i++){
        //     array_push($arr,$request->thietbi);

        //     print_r( key($request[$i] -> thietbi));
        //
        // }
        // print_r($request->thietbi);
        // $a = $request -> thietbi;
        // $str = implode(',',$a);
        // echo ;
        // print_r($request->thietbi);
        $loaiphong = new LoaiPhongModel();
        $loaiphong->ten_loai_phong = $request->loaiphong;
        $loaiphong->trangthietbi = implode(',',$request -> thietbi);
        $loaiphong->save();
        // LoaiPhongModel::where('ten_loai_phong', $request->tenphong)->update(['trangthietbi'=>implode(',',$request -> thietbi)]);
        return redirect()->route('typeroomsadmin')->with('message','Thêm Thiết Bị Thành Công');
    }
    public function typeroomsadminupdate(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'tenphong' => 'required',
                'thietbi' =>'required|array',
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        $arr = array();
        // for($i=0;$i<count($request->thietbi);$i++){
        //     array_push($arr,$request->thietbi);

        //     print_r( key($request[$i] -> thietbi));
        //
        // }
        // $a = $request -> thietbi;
        // $str = implode(',',$a);
        // echo ;
        // print_r($request->thietbi);

        LoaiPhongModel::where('ten_loai_phong', $request->tenphong)->update(['trangthietbi'=>implode(',',$request -> thietbi)]);
        return redirect()->route('typeroomsadmin')->with('message','Chỉnh sửa Thiết Bị Thành Công');
    }
    public function typeroomsadmindetele($id){
        $loai =  LoaiPhongModel::where('id_loai_phong', $id)->delete();
        return redirect()->route('typeroomsadmin')->with('message','Xóa thành công');
    }
}
