<?php

namespace App\Http\Controllers;

use App\Models\DichVuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DichVuChungController extends Controller
{
    //
    public function dichvuchung(){
        $dichvuchung = DichVuModel::all();
        return view('admin.pageadmin.dichvuchung',compact('dichvuchung'));
    }
    public function editdichvuchung(request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'id' =>'required',
                'tieude' => 'required',
                'mota' => 'required',
                // 'anh' => 'required',
                // 'gioitinh' => 'required'
            ]);
        }
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $arr=[];

        if($request->hasFile('anh')){
            foreach($request->file('anh') as $file){
                $file_Name = $file->getClientOriginalName();
                $file->move('public/dichvu',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        $anh = ",".''.implode(",",$arr);
        if($anh == ","){
            $anh = NULL;
        }
        if($request->anh1==NULL){
            $anh1=NULL
            ;
        } else{
            $anh1=implode(",",$request->anh1);
        }
        $dichvu = DichVuModel::where('id', $request->id)->first();
        if($dichvu->hinh==NULL){
            DichVuModel::where('id', $request->id)->update(['tendichvu' => $request -> tieude,
                                                        'mota' => $request -> mota,
                                                        'hinh' => implode(",",$arr)]);
        }
        else{
            // PhongModel::where('id_loai_phong', $id_loai->id_loai_phong)->update(['gia' => $request -> gia,
            // 'dientich' => $request -> dientich,
            // 'hinh_phong' => $phong->hinh_phong.','.implode(",",$arr),]);
            DichVuModel::where('id', $request->id)->update(['tendichvu' => $request -> tieude,
                                                        'mota' => $request -> mota,
                                                        'hinh' => $anh1.''.$anh]);
        }
        return redirect()->route('dichvuchung')->with('message','Sửa Thành Công');
    }
    public function dichvuchungadd(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'tieudedichvu' => 'required',
                'mota' => 'required',
                // 'anh' => 'required',
                // 'gioitinh' => 'required'
            ]);
        }
        $arr=[];
        if($request->hasFile('anh')){
            foreach($request->file('anh') as $file){
                $file_Name = $file->getClientOriginalName();
                $file->move('public/dichvu',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        $dichvuchung = new DichVuModel();
        $dichvuchung-> tendichvu = $request->tieudedichvu;
        $dichvuchung-> mota = $request->mota;
        $dichvuchung-> hinh = implode(",",$arr);
        $dichvuchung->save();
        return redirect()->route('dichvuchung')->with('message','Thêm Thành Công');
    }
}
