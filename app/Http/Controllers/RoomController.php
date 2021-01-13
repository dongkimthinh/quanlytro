<?php

namespace App\Http\Controllers;

use App\Models\DichVuModel;
use App\Models\LoaiPhongModel;
use App\Models\PhongModel;
use App\Models\TrangThietBiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    //
    public function room(){
        $room = PhongModel::orderBy('id_phong','DESC')->paginate(8);
        $trangthietbi = LoaiPhongModel::all();

        return view('pages.room',compact('room','trangthietbi','dichvu'));
    }
    public function roomadmin(){
        $phong = PhongModel::all();
        $loai_phong = LoaiPhongModel::all();
        $hinh = DB::table('phong')->select('hinh_phong')->get();
        // $hinh= var_dump(explode(',',$phong->hinh_phong));

        return view('admin.pageadmin.room',compact('phong','loai_phong'));
    }
    public function roomadminpost(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'loaiphong' => 'required',
                'gia' => 'required',
                'dientich' => 'required',
                'songuoi' => 'required',
                'soluong' => 'required',
                'mota' => 'required'
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
                $file->move('public/hinhtro',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        $id_loai = LoaiPhongModel::where('ten_loai_phong',$request -> loaiphong)->first();
        $phong = DB::table('phong')->where('id_loai_phong', $id_loai->id_loai_phong)->first();
        // dd($phong);
        if($phong!=NULL){
            return redirect()->route('roomadminpost')->with('message','Loại Phòng Đã Tồn Tại');
        }else{
            $add = new PhongModel();
            $add->id_loai_phong = $id_loai->id_loai_phong;
            $add->mota = $request->mota;
            $add->gia = $request->gia;
            $add->songuoi = $request->songuoi;
            $add->dientich = $request->dientich;
            $add->soluong = $request->soluong;
            $add->hinh_phong = implode(",",$arr);
            $add->save();
            return redirect()->route('roomadminpost')->with('message','Thêm Thành Công');
        }

        // if($phong->hinh_phong==NULL){
        //     PhongModel::where('id_loai_phong', $id_loai->id_loai_phong)->update(['gia' => $request -> gia,
        //     'dientich' => $request -> dientich,
        //     'hinh_phong' => implode(",",$arr),
        //     'songuoi' => $request -> songuoi,
        //     'mota' => $request -> mota]);
        // }
        // else{
        //     PhongModel::where('id_loai_phong', $id_loai->id_loai_phong)->update(['gia' => $request -> gia,
        //     'dientich' => $request -> dientich,
        //     'hinh_phong' => $phong->hinh_phong.','.implode(",",$arr),]);
        // }

    }
    public function roomadmindelete($id){
        PhongModel::where('id_phong', $id)->delete();
        return redirect()->route('roomadmin')->with('thongbao','Xóa thành công');
    }
    public function editpostroomadmin(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'id' => 'required',
                'gia' => 'required',
                'dientich' => 'required',
                'songuoi' => 'required',
                'soluong' => 'required',
                'mota' => 'required'
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
                $file->move('public/hinhtro',$file_Name);
                array_push($arr,$file_Name);
            }
        } else{
            $file_Name='nomane.jpg';
        }
        $anh = ",".''.implode(",",$arr);
        // dd($anh);
        if($anh == ","){
            $anh = NULL;
        }
        if($request->anh==NULL){
            $anh1 = NULL;
            $anh = implode(",",$arr);
        } elseif($request->anh!=NULL){
            $anh1 = implode(",",$request->anh);
        }
        // dd($request->anh);
        $room = PhongModel::where('id_phong', $request->id)->first();
        if($room->hinh_phong==NULL){
            PhongModel::where('id_phong', $request->id)->update(['gia' => $request -> gia,
            'dientich' => $request -> dientich,
            'hinh_phong' => implode(",",$arr),
            'songuoi' => $request->songuoi,
            'soluong' => $request->soluong,
            'mota' => $request->mota]);
        }
        else{
            // PhongModel::where('id_loai_phong', $id_loai->id_loai_phong)->update(['gia' => $request -> gia,
            // 'dientich' => $request -> dientich,
            // 'hinh_phong' => $phong->hinh_phong.','.implode(",",$arr),]);
            // DichVuModel::where('id', $request->id)->update(['tendichvu' => $request -> tieude,
            //                                             'mota' => $request -> mota,
            //                                             'hinh' => implode(",",$request->anh).''.$anh]);
            PhongModel::where('id_phong', $request->id)->update(['gia' => $request -> gia,
                                                                'dientich' => $request -> dientich,
                                                                'hinh_phong' => $anh1.''.$anh,
                                                                'songuoi' => $request->songuoi,
                                                                'soluong' => $request->soluong,
                                                                'mota' => $request->mota]);
        }
        // if($request->anh){
        //     PhongModel::where('id_phong', $request->id)->update(['gia' => $request -> gia,
        //     'dientich' => $request -> dientich,
        //     'hinh_phong' => implode(",",$arr),
        //     'songuoi' => $request->songuoi,
        //     'mota' => $request->mota]);
        // }else{
        //     PhongModel::where('id_phong', $request->id)->update(['gia' => $request -> gia,
        //     'dientich' => $request -> dientich,
        //     'hinh_phong' =>implode(",",$request->anh).''.$anh,
        //     'songuoi' => $request->songuoi,
        //     'mota' => $request->mota]);
        // }

        return redirect()->route('roomadminpost')->with('message','Sửa phòng mới thành công');
    }

}
