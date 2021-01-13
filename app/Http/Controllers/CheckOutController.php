<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as time;
use DateTime;
use Illuminate\Support\Facades\Mail;
session_start();
class CheckOutController extends Controller
{
    //
    public function checkout(){
        $cart = \session()->get('cart');
        $donhang = \session()->get('donhang');
        $coupon = \session()->get('coupon');
        // $ghichu =\session()->get('ghichu');
        // dd($cart);
        // dd($coupon[0]['coupon_code']);
        $getdate = \session()->get('getdate');
        if(session()->has('ghichu')){
            $ghichu = \session('ghichu');
        }else{
            $ghichu = NULL;
        }
        $total = 0;
        $coupon1 = 0;
        if($cart==true){
            foreach(session()->get('cart') as $cart){
                $subtotal = ($cart["product_gia"]*$cart["product_qty"]);
                $total = ($total + $subtotal);
            }
        }

        if(session()->has('coupon')){
            foreach(session()->get('coupon') as $key => $cp){
                if($cp['coupon_condition']=='1'){
                    $coupon1 += ($total*$cp['coupon_number'])/100;
                }else{
                    $coupon1 += $cp['coupon_number'];
                }
            }
        }
        // echo $total.'</br>';
        // echo $coupon.'</br>';
        // echo ;
        // dd(session()->get('cart'));
        if($cart==true){
            $date = new DateTime();

            if(Auth::guard('taikhoan')->check()){

                // print_r(Auth::guard('taikhoan')->user()->id_tk);
                //H:i:s
                session()->put('getdate',$date->format('Y-m-d H:i:s'));
                DB::table('hoa_don')->insert(['id_tk'=>Auth::guard('taikhoan')->user()->id_tk,
                                            //   'diachi' => session()->get('diachi'),
                                              'ngay_lap'=>$date->format('Y-m-d H:i:s'),
                                              'ghichu'=>$ghichu,
                                              'trangthai' => 'Chờ Xử Lý',
                                              'ngayden' => session()->get('ngayden'),
                                              'giamgia'=>$coupon1,
                                              'tongtien'=>$total-$coupon1]);
                \session()->forget('ghichu');
                $id_hd = DB::getPdo()->lastInsertId();
                \session()->put('donhang',$id_hd);
                foreach(session()->get('cart') as $key){
                    $soluong = DB::table('phong')->where('id_phong',$key['product_id'])->first();
                    // print_r($soluong);
                    // die();
                        if(($soluong->soluong-$key['product_qty'])>=0){
                            $soluong = DB::table('phong')->where('id_phong',$key['product_id'])->first();
                            // print_r($soluong);
                            DB::table('phong')->where('id_phong',$key['product_id'])->update(['soluong'=>$soluong->soluong-$key['product_qty']]);

                            DB::table('chi_tiet_hoa_don')->insert(['id_hd'=>$id_hd,
                                                                    'id_phong'=>$key['product_id'],
                                                                    'id_pttt'=> null,
                                                                    'id_gioithieu' => $key['id_gioithieu'],
                                                                    'diachi' => $key['diachi'],
                                                                    'soluong'=>$key['product_qty'],
                                                                    'dongia'=>$key['product_gia']]);
                        }else{
                            DB::table('phong')->where('id_phong',$key['product_id'])->update(['soluong'=>$soluong->soluong]);
                            DB::table('hoa_don')->where('id_hd',$id_hd->id_hd)->delete();
                            \session()->forget('donhang');
                            $thongbao=array();

                            foreach(session()->get('cart') as $key=>$val){
                                // dd($val['product_id']);
                                $soluong = DB::table('phong')->where('id_phong',$val['product_id'])->first();
                                // dd($soluong);
                                if(($soluong->soluong-$val['product_qty'])<0){
                                    // $arr=$val['product_loai'].' chỉ còn '.$soluong->soluong.' phòng';
                                    $arr = 'Đặt Phòng Thất Bại';
                                    array_push($thongbao,$arr);
                                }
                            }
                            // dd($thongbao);
                            return redirect()->route('cart')->withSuccess($thongbao);
                        }
                }
                if($coupon==true){
                    $soluongma = DB::table('magiamgia')->where('magiamgia',$coupon[0]['coupon_code'])->first();
                    if($soluongma->soluong>0){
                        DB::table('magiamgia')->where('magiamgia',$coupon[0]['coupon_code'])->update(['soluong'=>$soluongma->soluong-1]);
                    }
                }

                if(\session()->has('donhang')){
                    $id_kh =Auth::guard('taikhoan')->user()->id_kh;
                    $mail =DB::table('khachhang')->where('id_kh',$id_kh)->first();
                    $donhang = DB::table('hoa_don')->where('id_hd',session()->get('donhang'))->first();
                    // dd($donhang);
                    $details = [
                        'id_hd' => $donhang->id_hd,
                        'ngaylap' => $donhang->ngay_lap
                    ];
                    Mail::to($mail->email_kh)->send(new \App\Mail\OrderShipped($details));
                    \session()->forget('cart');
                    \session()->forget('donhang');
                    \session()->forget('coupon');
                }
            }
            return view('pages.check-out');
        } else {
            return redirect()->route('index');
        }

    }
    public function mail(){
        $donhang = \session()->get('donhang');
        // \session()->forget('donhang');
        if($donhang==true){
            return view('pages.mail');
        }
        // return view('pages.mail');
    }
}
