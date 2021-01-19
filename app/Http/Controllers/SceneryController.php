<?php

namespace App\Http\Controllers;

use App\Models\SceneryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SceneryController extends Controller
{
    //
    public function scenery(){
            $gioithieu = DB::table('gioithieu')->select('diachi')->get();
            $scenery = SceneryModel::join('gioithieu','khungcanhvaanhnoibat.id_dc','=','gioithieu.id')->select('khungcanhvaanhnoibat.id','khungcanhvaanhnoibat.id_dc','gioithieu.diachi','anhkhungcanhdiachitheoloai')->get();
            // dd($scenery);
            return view('admin.pageadmin.scenery',compact('gioithieu','scenery'));
    }
    public function sceneryAdd(Request $request){
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
                $file->move('public/khungcanh',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        $scenery = new SceneryModel();
        $scenery -> anh = implode(",",$arr);
        $scenery -> save();
        // SlideModel::where('ten_loai_phong', $request->tenphong)->update(['trangthietbi'=>implode(',',$request -> thietbi)]);
        return redirect()->route('scenery')->with('message','Thêm Ảnh Thành Công');
    }
    public function sceneryUpdate(Request $request){
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
                $file->move('public/khungcanh',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        if($request->anh){
            SceneryModel::where('id', $request->id)->update([
                                                                'anhkhungcanhdiachitheoloai' => implode(",",$request->anh).','.implode(",",$arr)]);
        }else{
            SceneryModel::where('id', $request->id)->update([
                                                                'anhkhungcanhdiachitheoloai' =>implode(",",$arr)]);
        }
        return redirect()->route('scenery')->with('message','Sửa thành công');
    }
    public function sceneryDelete($id){
        echo $id;
        SceneryModel::where('id', $id)->delete();
        return redirect()->route('scenery')->with('message','Xóa Thành Công');
    }
}
