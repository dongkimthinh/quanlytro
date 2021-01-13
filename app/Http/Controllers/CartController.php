<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhongModel;
use App\Models\MaGiamGiaModel;
use App\Models\PhongModel;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
session_start();
class CartController extends Controller
{
    //

    public function cart(){
        // session()->forget('cart');
        // echo session()->get('ngayden');
        // Session->destroy('cart');
        // echo ${ghichu};
        // print_r(\session()->get('ghichu'));
    //     $arr[1] = [];
    //     array_push($arr[1],1);
        // $cart = session()->get('cart');
        // foreach($cart as $key=>$val){
        //     foreach($val as $v=>$g){
        //         print_r($key);

        //         // print_r($g);

        //         // if($v == $val){

        //         // }
        //     }
        // }
    // dd($arr);
        // echo \session('ghichu');
        // $cart = session()->get('cart');
        // foreach($cart as $key=>$val){
        //     foreach($val as $k=>$v){
        //         print_r($val['product_id']);
        //         // echo '<br>';
        //         // print_r($v);

        //         // print_r($v);

        //     }

        // }

        // dd(session()->get('cart'));
        return view('pages.cart');
    }
    public function postghichu(Request $request){
        $data = $request->all();
        // print_r($data);
        \session()->put('ghichu',$data['ghichu']);
        print_r(\session('ghichu'));
    }
    public function datngay(Request $request){
        $data = $request->all();
        // print_r($data);die();
        $cart = session()->get('cart');
        $cart_product_id = DB::table('phong')->where('id_loai_phong',$data['id_loaiphong'])->first();
        $values = explode(",",$cart_product_id->hinh_phong);
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key=>$val){
                if($data['diachi']==$val['diachi']&&$val['product_loai']&&$val['product_id']==$cart_product_id->id_phong){
                    $is_avaiable++;
                    // $cart[$data['cart_product_id']]['product_qty']++;
                    // session()->put('cart',$cart);
                }
            }
            if($is_avaiable==0){
                $cart[] = array(
                    'product_id' => $cart_product_id->id_phong,
                    'product_loai' => $data['loaiphong'],
                    'product_image' => $values[0],
                    'diachi' =>$data['diachi'],
                    'id_gioithieu' => $data['id_gioithieu'],
                    'ngayden'=>$data['ngayden'],
                    'product_qty' => $data['soluong_phong'],
                    'product_gia' => $cart_product_id->gia,
                );
                session()->put('cart',$cart);
                // session()->save();
            }
            else {
                foreach($cart as $key=>$val){
                    if($val['product_id']==$cart_product_id->id_phong&&$data['diachi']==$val['diachi']){
                        $cart[$key]['product_qty']+=$data['soluong_phong'];
                        session()->put('cart',$cart);
                    }
                }
            }
        } else {
            // $cart[] = array(
            //         'product_id' => $data['cart_product_id'],
            //         'product_loai' => $data['cart_product_ten_loai_phong'],
            //         'product_image' => $data['cart_product_image'],
            //         'diachi' =>$diachi,
            //         'id_gioithieu' => $data['id_gioithieu'],
            //         'ngayden'=>$ngayden,
            //         'product_qty' => 1,
            //         'product_gia' => $data['cart_product_gia'],
            // );
            $cart[] = array(
                'product_id' => $cart_product_id->id_phong,
                'product_loai' => $data['loaiphong'],
                'product_image' => $values[0],
                'diachi' =>$data['diachi'],
                'id_gioithieu' => $data['id_gioithieu'],
                'ngayden'=>$data['ngayden'],
                'product_qty' => $data['soluong_phong'],
                'product_gia' => $cart_product_id->gia,
            );
        }
        session()->put('cart',$cart);
        session()->save();
    }
    public function addtoCart(request $request,$ngayden,$diachi){
        $data = $request->all();
        $cart = session()->get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key=>$val){
                if($diachi==$val['diachi']&&$val['product_loai']&&$val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;
                    // $cart[$data['cart_product_id']]['product_qty']++;
                    // session()->put('cart',$cart);
                }
            }
            if($is_avaiable==0){
                $cart[] = array(
                    'product_id' => $data['cart_product_id'],
                    'product_loai' => $data['cart_product_ten_loai_phong'],
                    'product_image' => $data['cart_product_image'],
                    'diachi' =>$diachi,
                    'id_gioithieu' => $data['id_gioithieu'],
                    'ngayden'=>$ngayden,
                    'product_qty' => 1,
                    'product_gia' => $data['cart_product_gia'],
                );
                session()->put('cart',$cart);
                // session()->save();
            }
            else {
                foreach($cart as $key=>$val){
                    if($val['product_id']==$data['cart_product_id']&&$diachi==$val['diachi']){
                        $cart[$key]['product_qty']++;
                        session()->put('cart',$cart);
                    }
                }
            }
        } else {
            $cart[] = array(
                    'product_id' => $data['cart_product_id'],
                    'product_loai' => $data['cart_product_ten_loai_phong'],
                    'product_image' => $data['cart_product_image'],
                    'diachi' =>$diachi,
                    'id_gioithieu' => $data['id_gioithieu'],
                    'ngayden'=>$ngayden,
                    'product_qty' => 1,
                    'product_gia' => $data['cart_product_gia'],
            );
        }
        session()->put('cart',$cart);
        session()->save();

        // $data = $request->all();
        // $cart = session()->get('cart');
        // if($cart==true){
        //     $is_avaiable = 0;
        //     foreach($cart as $key=>$val){
        //         foreach($val as $k=>$v){
        //             if($key==$diachi&&$v['product_id']==$k){
        //                 $is_avaiable++;
        //                 // $cart[$data['cart_product_id']]['product_qty']++;
        //                 // session()->put('cart',$cart);
        //             }
        //         }

        //     }
        //     if($is_avaiable!=0){
        //         foreach($cart as $key=>$val){
        //             foreach($val as $k=>$v){
        //                 if($k==$v['product_id']){
        //                     // update([]);
        //                     $k++;
        //                     $diachi=[$k] = array(
        //                         'product_id' => $data['cart_product_id'],
        //                         'product_loai' => $data['cart_product_ten_loai_phong'],
        //                         'product_image' => $data['cart_product_image'],
        //                         'diachi' =>$diachi,
        //                         'ngayden'=>$ngayden,
        //                         'product_qty' => 1,
        //                         'product_gia' => $data['cart_product_gia'],
        //                     );
        //                     session()->put('cart',$cart[$diachi]);
        //                 }

        //             }

        //         }

        //     }
        //     // else {
        //     //     foreach($cart as $key=>$val){
        //     //         if($val['diachi']==$diachi){
        //     //             $cart[$key]['product_qty']++;
        //     //             session()->put('cart',$cart);
        //     //             // break;
        //     //         } else {
        //     //             $cart[$key++] = array(
        //     //                 'product_id' => $data['cart_product_id'],
        //     //                 'product_loai' => $data['cart_product_ten_loai_phong'],
        //     //                 'product_image' => $data['cart_product_image'],
        //     //                 'diachi' =>$diachi,
        //     //                 'ngayden'=>$ngayden,
        //     //                 'product_qty' => 1,
        //     //                 'product_gia' => $data['cart_product_gia'],
        //     //             );
        //     //             session()->put('cart',$cart);
        //     //         }
        //     //     }
        //     // }
        // } else {
        //     $cart[$diachi][$data['cart_product_id']] = array(
        //         'product_id' => $data['cart_product_id'],
        //         'product_loai' => $data['cart_product_ten_loai_phong'],
        //         'product_image' => $data['cart_product_image'],
        //         'diachi' =>$diachi,
        //         'ngayden'=>$ngayden,
        //         'product_qty' => 1,
        //         'product_gia' => $data['cart_product_gia'],
        //     );
        // }
        // session()->put('cart',$cart);
        // session()->save();



        // $id = $data['cart_product_id'];
        // if(!session()->has('cart')){
        //     $cart =[
        //         $data['cart_product_id'] => [
        //             'product_id' => $data['cart_product_id'],
        //             'product_loai' => $data['cart_product_ten_loai_phong'],
        //             'product_image' => $data['cart_product_image'],
        //             'product_qty' => 1,
        //             'product_gia' => $data['cart_product_gia'],
        //         ]
        //     ];
        //     session()->put('cart',$cart);
        // } elseif(!isset($cart[$data['cart_product_id']])){
        //     $cart[$data['cart_product_id']] = [
        //         'product_id' => $data['cart_product_id'],
        //         'product_loai' => $data['cart_product_ten_loai_phong'],
        //         'product_image' => $data['cart_product_image'],
        //         'product_qty' => 1,
        //         'product_gia' => $data['cart_product_gia'],
        //         ];
        //     session()->put('cart',$cart);
        // } elseif(isset($cart[$data['cart_product_id']])){
        //     if (array_key_exists($data['cart_product_id'], $cart)) {
        //         $cart[$data['cart_product_id']]['product_qty']++;
        //         session()->put('cart',$cart);
        //     }
        //     $cart[$data['cart_product_id']] = [
        //         'product_id' => $data['cart_product_id'],
        //         'product_loai' => $data['cart_product_ten_loai_phong'],
        //         'product_image' => $data['cart_product_image'],
        //         'product_qty' => $cart[$data['cart_product_id']]['product_qty']++,
        //         'product_gia' => $data['cart_product_gia'],
        //     ];
        //     session()->put('cart',$cart);
                // $cart[$data['cart_product_id']]['product_qty']++;
                // session()->put('cart', $cart);

        // }

        // print_r($data);

        // if(isset($cart[$data['cart_product_id']])){

        // }
        // redirect()->route('cart');
        // if($cart[$data['cart_product_id']]){
        //     $cart[$data['cart_product_id']] = [
        //         'product_loai' => $data['cart_product_ten_loai_phong'],
        //         'product_image' => $data['cart_product_image'],
        //         'product_qty' => $cart[$data['cart_product_id']]['product_qty']++,
        //         'product_gia' => $data['cart_product_gia'],
        // ];
        // session()->put('cart', $cart);
        // }
    }
    public function trashcart($id){
        // $data = $request->all();
        // echo $id;
        $cart=session()->get('cart');
        if($cart==true){
            foreach($cart as $key=>$val){
                if($key==$id){
                    unset($cart[$key]);
                }
            }
            session()->put('cart', $cart);
        }
        if($cart==null){
            session()->forget('cart');
        }
        // print_r($data);
        // session()->forget('cart',$id);
        // $cart[$data['cart_product_id']]
    }
    public function updatecart($id,$value){
        $cart=session()->get('cart');
        if($cart==true){
            foreach($cart as $key=>$val){
                if($key==$id){
                    $cart[$id]['product_qty'] = $value;
                }
                // echo $key;
                // echo $value;
            }
            session()->put('cart', $cart);
        }
    }
    public function check_coupon(Request $request){
        $data = $request->all();
        $coupon = MaGiamGiaModel::where('magiamgia',$data['inputma'])->first();
        if($coupon){
            $count_coupon = $coupon->count();
            if($coupon->soluong>0){
                if($count_coupon>0){
                    $count_session = session()->get('coupon');
                    if($count_session==true){
                        $is_avaiable = 0;
                        if($is_avaiable==0){
                            $cou[] = array(
                                'coupon_code' => $coupon->magiamgia,
                                'coupon_condition' => $coupon->dieu_kien_giam,
                                'coupon_number' => $coupon->gia_giam,
                            );
                            session()->put('coupon',$cou);
                        }
                    }else{
                        $cou[] = array(
                            'coupon_code' => $coupon->magiamgia,
                            'coupon_condition' => $coupon->dieu_kien_giam,
                            'coupon_number' => $coupon->gia_giam,
                        );
                        session()->put('coupon',$cou);
                    }
                    session()->save();
                    // print_r($test);
                    // return redirect()->route('cart')->with('message','Áp dụng mã thành công');
                }
            }else{
                return redirect()->with('message','Mã giảm giá không tồn tại');
            }
        }else{
            return redirect()->with('message','Mã giảm giá không tồn tại');
        }
        // print_r($data);
    }
    public function remove_coupon(){
        session()->forget('coupon');
    }
}
