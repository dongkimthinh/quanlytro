<?php

namespace App\Http\Controllers;

use App\Models\DichVuModel;
use App\Models\KhachHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\LoaiPhongModel;
use App\Models\PhongModel;
use App\Models\SlideModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $loaiphong = LoaiPhongModel::all();
        $phong = PhongModel::all();
        // $maxslide = SlideModel::max('id_slide');
        $dichvu = DichVuModel::all();
        $khungcanhdiachi = DB::table('khungcanhvaanhnoibat')->join('gioithieu','khungcanhvaanhnoibat.id_dc','=','gioithieu.id')->select('khungcanhvaanhnoibat.anhnoibat','diachi','khungcanhvaanhnoibat.created_at')->get();
        // dd($khungcanhdiachi);
        $slide =SlideModel::all();
        return view('pages.home',compact('loaiphong','phong','slide','dichvu','khungcanhdiachi'));
    }
    public function khachhangadmin(){
        $khachhang = KhachHangModel::join('taikhoan','taikhoan.id_kh','=','khachhang.id_kh')->get();
        // dd($khachhang);
        return view('admin.pageadmin.khachhang',compact('khachhang'));
    }
    public function editkhachhangadmin(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'idkh' =>'required',
                'tenkh' => 'required',
                'sdt' => 'required',
                'email' => 'required',
                'gioitinh' => 'required'
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        // if($request->hasFile('anh')){
        //     // $file = $request->anh('anh');
        //     // $file_Name = time().'_'. $file->getClientOriginalName();
        //     // $file -> move(public_path('img/userimg'),$file_Name);
        //     $file = $request -> anh;
        //     $file_Name = $file->getClientOriginalName();
        //     $file->move('public/hinhtro',$file_Name);
        // } else{
        //     $file_Name='nomane.jpg';
        // }
        // $id_loai = LoaiPhongModel::where('ten_loai_phong',$request -> loaiphong)->first();
        // $id = PhongModel::where('id_phong',$request -> idphong )->first();
        // $newroom = PhongModel::find($id);
        // $newroom -> id_loai_phong = $id_loai -> id_loai_phong;
        // $newroom -> ten_phong = $request -> mota;
        // $newroom -> gia = $request -> gia;
        // $newroom -> dientich = $request -> dientich;
        // $newroom -> hinh_phong = $file_Name;
        // $newroom -> save();
        KhachHangModel::where('id_kh', $request -> idkh)->update(['tenkh' => $request -> tenkh,
                                                                     'sdt_kh' => $request -> sdt,
                                                                     'email_kh' => $request -> email,
                                                                     'gioitinh' => $request -> gioitinh,]);
        // $newroom -> id_loai_phong = $id_loai -> id_loai_phong;
        // $newroom -> ten_phong = $request -> tenphong;
        // $newroom -> mota = $request -> mota;
        // $newroom -> gia = $request -> gia;
        // $newroom -> dientich = $request -> dientich;
        // $newroom -> hinh_phong = $file_Name;
        // $newroom -> save();
         $name = KhachHangModel::where('tenkh', $request -> tenkh)->first();
        if($name -> tenkh == $request -> tenkh){
            return redirect()->route('editkhachhangadmin')->with('message','Sửa khách hàng thành công');
        }else
            return redirect()->route('editkhachhangadmin')->with('message','Sửa khách hàng thất bại');
    }
    public function khachhangdelete($id){
        $name = KhachHangModel::where('id_kh', $id)->delete();
        return redirect()->route('khachhangadmin')->with('thongbao','Xóa thành công');
    }
    public function search($search){
        // if($search->isMethod('post'))
        // {
        //
        // }
        echo $search;
    }
}
