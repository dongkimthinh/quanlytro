<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AboutusController extends Controller
{
    //
    public function aboutus(){
        $gioithieu = DB::table('gioithieu')->get();
        // dd($gioithieu);
        return view('pages.about-us',compact('gioithieu'));
    }
    public function type_about_us($id){
        // echo $id;
        $gioithieu = DB::table('gioithieu')->where('id',$id)->first();
        // dd($gioithieu);
        return view('pages.type-about-us',compact('gioithieu'));
    }
    public function gioithieuadmin(){
        $gioithieu = DB::table('gioithieu')->get();
        return view('admin.pageadmin.gioithieu',compact('gioithieu'));
    }
    public function gioithieuadd(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'ten' => 'required',
                'tieude' => 'required',
                'noidung'=>'required',
                'map' => 'required'
                // 'magiamgia' =>'required',
                // 'anh' =>'required|array'
            ]);
            if($validator->fails()){
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $arr=[];
            if($request->hasFile('anh')){

                foreach($request->file('anh') as $file)
                {
                    // $file = $request -> anh;
                    $file_Name = $file->getClientOriginalName();
                    $file->move('public/img/about',$file_Name);
                    array_push($arr,$file_Name);
                }
            } else{
                $file_Name='nomane.jpg';
            }
            DB::table('gioithieu')->insert(['diachi'=>$request->ten,'tieude'=>$request->tieude,'noidung'=>$request->noidung,'anh'=>implode(",",$arr),'map'=>$request->map]);
            return redirect()->back()->with('message','Thêm Thành Công');
        }
    }
    public function gioithieuupdate(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'id' => 'required',
                'diachi' => 'required',
                'tieude' => 'required',
                'noidung'=>'required',
                // 'magiamgia' =>'required',
                // 'anh' =>'required|array'
            ]);
            if($validator->fails()){
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $arr=[];

            if($request->hasFile('anh')){

                foreach($request->file('anh') as $file)
                {
                    // $file = $request -> anh;
                    $file_Name = $file->getClientOriginalName();
                    $file->move('public/img/about',$file_Name);
                    array_push($arr,$file_Name);
                }
            } else{
                $file_Name='nomane.jpg';
            }
            // dd($arr);
            $anh = ",".''.implode(",",$arr);
            if($anh == ","){
                $anh = NULL;
            }
            if($request->anhdaup==NULL){
                $anh1 = NULL;
                $anh = implode(",",$arr);
            } elseif($request->anhdaup!=NULL){
                $anh1 = implode(",",$request->anhdaup);
            }
            $gioithieu = DB::table('gioithieu')->where('id', $request->id)->first();
            if($gioithieu->anh==NULL){
                DB::table('gioithieu')->where('id', $request->id)->update(['diachi' => $request -> diachi,
                                                                            'tieude' => $request -> tieude,
                                                                            'noidung' => $request->noidung,
                                                                            'anh' => implode(",",$arr),
                                                                            'map'=>$request->map
                                                                            ]);
            }
            else{
                // PhongModel::where('id_loai_phong', $id_loai->id_loai_phong)->update(['gia' => $request -> gia,
                // 'dientich' => $request -> dientich,
                // 'hinh_phong' => $phong->hinh_phong.','.implode(",",$arr),]);
                // DichVuModel::where('id', $request->id)->update(['tendichvu' => $request -> tieude,
                //                                             'mota' => $request -> mota,
                //                                             'hinh' => implode(",",$request->anh).''.$anh]);
                DB::table('gioithieu')->where('id', $request->id)->update(['diachi' => $request -> diachi,
                                                                            'tieude' => $request -> tieude,
                                                                            'noidung' => $request->noidung,
                                                                            'anh' => $anh1.''.$anh,
                                                                            'map'=>$request->map
                                                                            ]);
            }
                // DB::table('gioithieu')->insert(['ten'=>$request->ten,'tieude'=>$request->tieude,'noidung'=>$request->noidung,'anh'=>implode(",",$arr),'magiamgia'=>$request->magiamgia]);
                return redirect()->back()->with('message','Sửa Thành Công');
        }
    }
    public function gioithieudelete($id){
        // echo $id;
        DB::table('gioithieu')->where('id',$id)->delete();
        return redirect()->back()->with('message','Xóa Thành Công');
    }
}
