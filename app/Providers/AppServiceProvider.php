<?php

namespace App\Providers;

use App\Models\HieuUngModel;
use App\Models\LoaiPhongModel;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //


        view()->composer('common.header',function($view){
            // session('custommername');
            if(Auth::guard('taikhoan')->check()){
                $id_kh = Auth::guard('taikhoan')->user()->id_kh;
                $tenkh = DB::table('khachhang')->where('id_kh',$id_kh)->first();
                // print_r($tenkh);
                $gioithieu = DB::table('gioithieu')->select('id','diachi')->get();
                $view->with('tenkh',$tenkh);
                $view->with('gioithieu',$gioithieu);
            }
            // $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            //     $res = "";
            //     for ($i = 0; $i < 10; $i++) {
            //         $res .= $chars[mt_rand(0, strlen($chars)-1)];
            //     }
            //     echo $res;
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('common.offcanvasmenusectionbegin',function($view){
            // session('custommername');
            if(Auth::guard('taikhoan')->check()){
                $id_kh = Auth::guard('taikhoan')->user()->id_kh;
                $tenkh = DB::table('khachhang')->where('id_kh',$id_kh)->first();
                // print_r($tenkh);
                $view->with('tenkh',$tenkh);
            }
            // $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            //     $res = "";
            //     for ($i = 0; $i < 10; $i++) {
            //         $res .= $chars[mt_rand(0, strlen($chars)-1)];
            //     }
            //     echo $res;
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('pages.mail',function($view){
            // session('custommername');
            if(Auth::guard('taikhoan')->check()){
                $id_kh = Auth::guard('taikhoan')->user()->id_kh;
                $tenkh = DB::table('khachhang')->where('id_kh',$id_kh)->first();
                // print_r($tenkh);
                $view->with('tenkh',$tenkh);
            }
            // $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            //     $res = "";
            //     for ($i = 0; $i < 10; $i++) {
            //         $res .= $chars[mt_rand(0, strlen($chars)-1)];
            //     }
            //     echo $res;
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('admin.common.header',function($view){
            session('admin');
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('common.header',function($view){
            $loai_sp= LoaiPhongModel::all();
            $gioithieu = DB::table('gioithieu')->get();
            $view->with('gioithieu',$gioithieu);
            $view->with('loai_sp',$loai_sp);
        });
        Paginator::useBootstrap();
        view()->composer('masterpage',function($view){
            $date = new DateTime();
            // dd($_SERVER["SERVER_ADDR"]);
            // if($_SERVER['DB_HOST']){
            DB::table('online')->insert(['link'=>url()->full(),'ip'=>$_SERVER['SERVER_ADDR'],'os'=>$_SERVER['HTTP_USER_AGENT'],'ngay'=>$date->format('Y-m-d H:i:s')]);
            // }
            $count = DB::table('online')->where( 'ngay', '>', Carbon::now()->subSeconds(60))->groupBy('os','ip')->get();
            $hieuung= HieuUngModel::where('trangthai', 'On')->first();
            $loaiphong = LoaiPhongModel::all();
            $gioithieu = DB::table('gioithieu')->select('id','diachi')->get();
            $view->with('hieuung',$hieuung);
            $view->with('loaiphong',$loaiphong);
            $view->with('count',$count);
            $view->with('gioithieu',$gioithieu);

        });
        view()->composer('common.offcanvasmenusectionbegin',function($view){

            $loai_sp= LoaiPhongModel::all();
            $gioithieu = DB::table('gioithieu')->get();
            $view->with('gioithieu',$gioithieu);
            $view->with('loai_sp',$loai_sp);
        });
        view()->composer('common.menu-mobile',function($view){
            // session('custommername');
            if(Auth::guard('taikhoan')->check()){
                $id_kh = Auth::guard('taikhoan')->user()->id_kh;
                $tenkh = DB::table('khachhang')->where('id_kh',$id_kh)->first();
                // print_r($tenkh);
                $gioithieu = DB::table('gioithieu')->select('id','diachi')->get();
                $view->with('tenkh',$tenkh);
                $view->with('gioithieu',$gioithieu);
            }
            $loai_sp= LoaiPhongModel::all();
            $gioithieu = DB::table('gioithieu')->get();
            $view->with('gioithieu',$gioithieu);
            $view->with('loai_sp',$loai_sp);
        });
        view()->composer('common.footer',function($view){
            $quanly = DB::table('thongtinlienhe')->select('ten','email','sdt')->get();
            $view->with('quanly',$quanly);
        });
    }
}
