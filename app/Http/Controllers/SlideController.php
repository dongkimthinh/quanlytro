<?php

namespace App\Http\Controllers;

use App\Models\SlideModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
{
    //
    public function slide(){
        $Slide = SlideModel::all();
        return view('admin.pageadmin.slide',compact('Slide'));
    }
    public function slideadd(Request $request){
        if($request->isMethod('POST')){
            $validator = validator::make($request->all(),[
                'tieude' => 'required',
                'noidung' =>'required',
                // 'anh' => 'array'
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        $arr=[];
        if($request->hasFile('anh')){

            foreach($request->file('anh') as $file)
            {
                // $file = $request -> anh;
                $file_Name = $file->getClientOriginalName();
                $file->move('public/slide',$file_Name);
                array_push($arr,$file_Name);
            }
        }else{
            $file_Name='nomane.jpg';
        }
        $Slide = new SlideModel();
        $Slide -> tieude = $request->tieude;
        $Slide -> noidung = $request->noidung;
        $Slide -> anh = implode(",",$arr);
        $Slide -> save();
        // SlideModel::where('ten_loai_phong', $request->tenphong)->update(['trangthietbi'=>implode(',',$request -> thietbi)]);
        return redirect()->route('slide')->with('message','Thêm Slide Thành Công');
    }
    public function slideupdate(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'id' => 'required',
                'tieude' => 'required',
                'noidung' => 'required',
            ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
        }
        $arr=[];
        if($request->hasFile('anh1')){
            foreach($request->file('anh1') as $file)
            {
                // $file = $request -> anh;
                $file_Name = $file->getClientOriginalName();
                $file->move('public/slide',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        if($request->anh){
            SlideModel::where('id_slide', $request->id)->update(['tieude' => $request -> tieude,
                                                                'noidung' => $request -> noidung,
                                                                'anh' => implode(",",$request->anh).','.implode(",",$arr)]);
        }else{
            SlideModel::where('id_slide', $request->id)->update(['tieude' => $request -> tieude,
                                                                'noidung' => $request -> noidung,
                                                                'anh' =>implode(",",$arr)]);
        }
        return redirect()->route('slide')->with('message','Sửa thành công');
    }
    public function slidedelete($id){
        echo $id;
        SlideModel::where('id_slide', $id)->delete();
        return redirect()->route('slide')->with('message','Xóa Thành Công');
    }
}
