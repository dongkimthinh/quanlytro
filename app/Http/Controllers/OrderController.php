<?php

namespace App\Http\Controllers;

use App\Models\KhachHangModel;
use App\Models\OrdersDetailsModel;
use App\Models\OrdersModel;
use App\Models\TaiKhoanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function orders_filter(Request $request){
        if($request->isMethod('POST')){
            $request->all();
            // date_default_timezone_set('Asia/Ho_Chi_Minh');
            // $date = $request->homnay;
            // date_modify($date, "-11 days");
            // dd(date_format($date, "Y-m-d"));
            // dd($request->startdate);
            // dd($request->startdate);
            $gioithieu = DB::table('gioithieu')->select('id','diachi')->get();
            $filter = DB::table('hoa_don')->join('taikhoan','hoa_don.id_tk','=','taikhoan.id_tk')->join('khachhang','taikhoan.id_kh','=','khachhang.id_kh')->join('chi_tiet_hoa_don','chi_tiet_hoa_don.id_hd','=','hoa_don.id_hd')
                    ->whereBetween('ngay_lap',[$request->startdate,$request->enddate])
                    // ->where('ngay_lap','>',$request->stratdate)
                    ->orWhere('trangthai','=',$request->trangthai)
                    ->orWhere('chi_tiet_hoa_don.diachi','like','%'.$request->diachi.'%')
                    ->get();
                    // dd($filter);
            $chitietHD = DB::table('chi_tiet_hoa_don')->get();
            // dd($filter);
            return view('admin.pageadmin.order-filter',compact('filter','gioithieu'));
        }
    }
    public function orders(){
        $hoadon=OrdersModel::all();
        // dd($hoadon);
        $khachhang = TaiKhoanModel::join('khachhang','taikhoan.id_kh','=','khachhang.id_kh')->get();
        // dd($khachhang);
        $chitietHD = DB::table('chi_tiet_hoa_don')->get();
        $filter=OrdersModel::groupBy('id_tk')->get();
        // dd($filter);
        $gioithieu = DB::table('gioithieu')->select('id','diachi')->get();
        // dd($gioithieu);
        return view('admin.pageadmin.order',compact('hoadon','khachhang','gioithieu','filter','chitietHD'));
    }
    public function ordersdelete($id){
        OrdersModel::where('id_hd',$id)->delete();
        return redirect()->route('orders')->with('message','Xóa Thành Công');
    }
    public function orders_details($id){
        $chitiet = OrdersModel::where('id_hd',$id)->join('taikhoan','taikhoan.id_tk','=','hoa_don.id_tk')->join('khachhang','taikhoan.id_kh','=','khachhang.id_kh')->first();
        // dd($chitiet);
        $chitietHD = OrdersDetailsModel::where('id_hd',$id)->join('phong','phong.id_phong','=','chi_tiet_hoa_don.id_phong')->join('loai_phong','loai_phong.id_loai_phong','=','phong.id_loai_phong')->select('id_hd','dongia','chi_tiet_hoa_don.soluong','ten_loai_phong','chi_tiet_hoa_don.diachi')->get();
        // dd($chitietHD);
        return view('admin.pageadmin.orders-details',compact('chitiet','chitietHD'));
    }
}
