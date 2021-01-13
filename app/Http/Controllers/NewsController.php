<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;

use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    //
    public function news(){
        $news = DB::table('tin_tuc')->get();
        return view('pages.news',compact('news'));
    }

    public function newsEdit($id){
        $news = NewsModel::where('id_tin', $id)->first();
        return view('admin.pageadmin.newsEdit',compact('news'));
    }

    public function postNews(){
        return view('admin.pageadmin.postNews');
    }

    public function newsAdmin(){
        $news = DB::table('tin_tuc')->get();
        return view('admin.pageadmin.news',compact('news'));
    }

    public function newsAdd(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'tieude' => 'required',
                'noidung_tt'=>'required',
                'noidung'=>'required',
                // 'hinh_anh_tin' =>'required|array',
                // 'ngaydang' => 'required',
                'tacgia' => 'required',
            ]);
            if($validator->fails()){
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $ngaydang = date("Y/m/d");
            if($request->hasFile('anh')){

                // foreach($request->file('anh') as $file)
                // {
                    $file = $request->file('anh');
                    $file_Name = $file->getClientOriginalName();
                    $file->move('public/img/blog',$file_Name);
                    // array_push($arr,$file_Name);
                //}
            } else{
                $file_Name='nomane.jpg';
            }
            DB::table('tin_tuc')->insert(['tieude'=>$request->tieude,'noidung_tt'=>$request->noidung_tt,'noidung'=>$request->noidung,'hinh_anh_tin'=>$file_Name,'ngaydang'=>$ngaydang, 'tacgia'=>$request->tacgia]);
            return redirect()->back()->with('message','Thêm Thành Công');
        }
    }
    public function newsUpdate(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'id_tin' => 'required',
                'tieude' => 'required',
                'noidung_tt'=>'required',
                'noidung'=>'required',
                // 'ngaydang' =>'required',
                'tacgia' =>'required',
            ]);
            if($validator->fails()){
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $ngaydang = date("Y/m/d");
        if($request->hasFile('anh')){
            $file = $request->file('anh');
            $file_Name = $file->getClientOriginalName();
            $file->move('public/img/blog',$file_Name);
        }
        else if($request->anhdaup){
            $file_Name = $request->anhdaup;
        }
         else{
            $file_Name='nomane.jpg';
        }
        // $anh = ",".''.implode(",",$arr);
        // if($anh == ","){
        //     $anh = NULL;
        // }
        // if($request->anhdaup==NULL){
        //     $anh1 = NULL;
        // } elseif($request->anhdaup!=NULL){
        //     $anh1 = implode(",",$request->anhdaup);
        // }
        $news = DB::table('tin_tuc')->where('id_tin', $request->id_tin)->first();
        // if($news->anh==NULL){
            NewsModel::where('id_tin', $request->id_tin)->update([
                                                                        'tieude' => $request->tieude,
                                                                        'noidung_tt' => $request->noidung_tt,
                                                                        'noidung' => $request->noidung,
                                                                        'hinh_anh_tin' => $file_Name,
                                                                        'ngaydang' => $ngaydang,
                                                                        'tacgia' => $request->tacgia]);
        //}
        // else{
        //     NewsModel::where('id_tin', $request->id_tin)->update([
        //                                                                 'tieude' => $request->tieude,
        //                                                                 'noidung_tt' => $request->noidung_tt,
        //                                                                 'noidung' => $request->noidung,
        //                                                                 'hinh_anh_tin' => $anh1.''.$anh,
        //                                                                 'ngaydang' => $request->ngaydang]);
        // }
            // DB::table('gioithieu')->insert(['ten'=>$request->ten,'tieude'=>$request->tieude,'noidung'=>$request->noidung,'anh'=>implode(",",$arr),'magiamgia'=>$request->magiamgia]);
            return redirect()->back()->with('message','Sửa Thành Công');
        }
    }
    public function newsDelete($id){
        DB::table('tin_tuc')->where('id_tin',$id)->delete();
        return redirect()->back()->with('message','Xóa Thành Công');
    }
}
