<?php

namespace App\Http\Controllers;

use App\Models\MaGiamGiaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CouponController extends Controller
{
    //
    public function coupon(){
        $coupon = MaGiamGiaModel::all();
        $dkgiam = DB::table('dieukiengiam')->get();
        // print_r($dkgiam);die();
        return view('admin.pageadmin.coupon',compact('coupon','dkgiam'));
    }
    public function couponadd(request $request){
        if($request->isMethod('POST')){
            $MaGiamGia = new MaGiamGiaModel();
            $MaGiamGia->ten_ma = $request->tenma;
            $MaGiamGia->magiamgia = $request->magiam;
            $MaGiamGia->soluong = $request->soluong;
            $MaGiamGia->dieu_kien_giam = $request->dieukiengiam;
            $MaGiamGia->gia_giam = $request->giagiam;
            $MaGiamGia->save();
            return redirect()->route('coupon')->with('message','Thêm Thành Công');
        }
    }
    public function couponupdate(Request $request){
        if($request->isMethod('POST')){
            MaGiamGiaModel::where('id', $request->id)->update(['ten_ma' => $request->tenma,
                                                               'magiamgia' => $request->magiam,
                                                               'soluong' => $request->soluong,
                                                               'dieu_kien_giam' => $request->dieukiengiam,
                                                               'gia_giam' => $request->giagiam]);
        }
        return redirect()->route('coupon')->with('message','Sửa Thành Công');
    }
    public function coupondelete($id){
        MaGiamGiaModel::where('id',$id)->delete();
        return redirect()->route('coupon')->with('message','Xóa Thành Công');
    }
}
