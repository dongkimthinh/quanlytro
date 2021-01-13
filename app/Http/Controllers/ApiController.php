<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //
    public function getAPI(){
        // print_r(session()->get('getdate'));
        // $hoadon = DB::table('hoa_don')->join('taikhoan','hoa_don.id_tk','=','taikhoan.id_tk')->join('khachhang','taikhoan.id_tk','=','taikhoan.id_tk')->where('ngay_lap',session()->get('getdate'))->first();
        // // $khachhang DB::table('')
        // // dd($hoadon);
        // return response()->json([
        //     'id_HD' => $hoadon->id_hd,
        //     'HOTEN' => $hoadon->tenkh,
        //     'Ngay' => session()->get('getdate'),
        //     'SDT' => $hoadon->sdt_kh,
        //     'EMAIL' => $hoadon->email_kh,
        //     'TrangThai' => $hoadon->trangthai,
        //     'TONGTIEN' => $hoadon->tongtien
        // ]);
        // kvstore API url
        // User data to send using HTTP POST method in curl
        // $FacebookID = $_POST['FacebookID'];
    // $FacebookName = $_POST['FacebookName'];
    // $FacebookUrl = $_POST['FacebookUrl'];
    // $FacebookTypeID = $_POST['FacebookTypeID'];
    // $link = $FacebookUrl;
    // $string = chop($link,'/');
    // $last_Word_start = strrpos($string, '/') + 1;
    // $last_Word = substr($string, $last_Word_start);
    // $FacebookID = $last_Word;


    // $data = array('FacebookID'=>"${FacebookID}",'FacebookUrl'=>"${FacebookUrl}", 'FacebookName' =>"${FacebookName}",'FacebookTypeID' =>"${FacebookTypeID}");

    // // Data should be passed as json format
    // $data_json = json_encode($data);

    // // API URL to send data
    // $url = 'http://www.kltn26.somee.com/api/Home/AddToWatchList';

    // // curl initiate
    // $ch = curl_init();

    // curl_setopt($ch, CURLOPT_URL, $url);

    // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // // SET Method as a POST
    // curl_setopt($ch, CURLOPT_POST, 1);

    // // Pass user data in POST command
    // curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // // Execute curl and assign returned data
    // $response  = curl_exec($ch);

    // // Close curl
    // curl_close($ch);

    // // See response if data is posted successfully or any error
    // // print_r ($response);
    // echo "<script>alert('Thêm dữ liệu thành công');
    //     window.location = './index.php';</script>";
    // }
    // http://192.168.1.147/api/chitietdatphong/getchitietdatphong
    $data = file_get_contents('http://192.168.1.147/api/datphong/getdatphong');
    $deccodedData = json_decode($data);
    foreach($deccodedData as $key){
        print_r($key);
    }
    }
}
