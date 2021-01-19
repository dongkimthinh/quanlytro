<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        // Trong Hôm Nay
        $date = Carbon::yesterday();
        // $date1 = Carbon::yesterday();
        $dt = Carbon::now();
        // echo $dt->subMonth();
        // echo '<br>';
        // echo $date->addDay();
        $soluong = DB::table('phong')->sum('soluong');
        $count = DB::table('online')->where('ngay', '>', Carbon::now()->subSeconds(60))->groupBy('os','ip')->get();
        $counthomnay = DB::table('online')->where('ngay','>',$date)->groupBy('os','ip')->get();
        $counthomqua = DB::table('online')->whereBetween('ngay',[Carbon::yesterday(),Carbon::yesterday()->addDay()])->groupBy('os','ip')->get();

        $counttongso = DB::table('online')->groupBy('os','ip')->get();
        $phong = DB::table('phong')->join('loai_phong','phong.id_loai_phong','=','loai_phong.id_loai_phong')->select('ten_loai_phong','soluong')->get();
        $hoadon = DB::table('hoa_don')->where('ngay_lap','>',$date)->get();
        $hoadonhomqua = DB::table('hoa_don')->whereBetween('ngay_lap',[Carbon::yesterday(),Carbon::yesterday()->addDay()])->count();
        // dd($hoadonhomqua);
        $hoadontrong1thang = DB::table('hoa_don')->where('ngay_lap','>',$dt->subMonth())->get();
        $hoadontongcong = DB::table('hoa_don')->count();

        $taikhoan = DB::table('taikhoan')->where('quyen','Khách hàng')->count();
        $taikhoanhomnay = DB::table('taikhoan')->where('ngaytao','>',$date)->count();
        $taikhoanhomqua = DB::table('taikhoan')->where([['ngaytao','>=',Carbon::yesterday()],['ngaytao','<=',Carbon::yesterday()->addDay()]])->count();
        $taikhoantrong1thang = DB::table('taikhoan')->where([['ngaytao','>',$dt->subMonth()],['quyen','Khách hàng']])->count();
        // dd($taikhoantrong1thang);
        return view('admin.pageadmin.dashboard',compact('count','soluong','hoadonhomqua','counthomnay','counthomqua','counttongso','phong','hoadon','hoadontrong1thang','hoadontongcong','taikhoan','taikhoanhomqua','taikhoanhomnay','taikhoantrong1thang'));
    }
    public function charts(){
        return view('admin.pageadmin.charts');
    }
}
