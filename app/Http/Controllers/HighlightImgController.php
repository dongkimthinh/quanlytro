<?php

namespace App\Http\Controllers;

use App\Models\HighlightImgModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HighlightImgController extends Controller
{
    //
    public function highlightImg(){
            $gioithieu = DB::table('gioithieu')->select('diachi')->get();
            $highlightImg = HighlightImgModel::join('gioithieu','khungcanhvaanhnoibat.id_dc','=','gioithieu.id')->select('khungcanhvaanhnoibat.id','khungcanhvaanhnoibat.id_dc','gioithieu.diachi','anhnoibat')->get();
            //  dd($highlightImg);
            return view('admin.pageadmin.highlightImg',compact('gioithieu','highlightImg'));
    }
    public function highlightImgAdd(Request $request){
        if($request->isMethod('POST')){
            $validator = validator::make($request->all());
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
                $file->move('public/anhnoibat',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        $highlightImg = new HighlightImgModel();
        $highlightImg -> anh = implode(",",$arr);
        $highlightImg -> save();
        // SlideModel::where('ten_loai_phong', $request->tenphong)->update(['trangthietbi'=>implode(',',$request -> thietbi)]);
        return redirect()->route('highlightImg')->with('message','Thêm Ảnh Thành Công');
    }
    public function highlightImgUpdate(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'id' => 'required',
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
                $file->move('public/anhnoibat',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        if($request->anh){
            highlightImgModel::where('id', $request->id)->update([
                                                                'anhnoibat' => implode(",",$request->anh).','.implode(",",$arr)]);
        }else{
            highlightImgModel::where('id', $request->id)->update([
                                                                'anhnoibat' =>implode(",",$arr)]);
        }
        return redirect()->route('highlightImg')->with('message','Sửa thành công');
    }
    public function highlightDelete($id){
        echo $id;
        highlightImgModel::where('id', $id)->delete();
        return redirect()->route('highlightImg')->with('message','Xóa Thành Công');
    }
}
