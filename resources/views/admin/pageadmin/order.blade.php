@extends('admin.masterpageadmin')
@section('title')
    Đơn Đặt Phòng
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Danh Sách Khách Hàng Đặt Phòng</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Đơn Hàng</li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách Khách Hàng Đặt Phòng</li>
            </ol>
        </div>

        <div class="row">
            <div class="mb-4 col-lg-12">
                <!-- Simple Tables -->
                <div class="card">
                    @if (session('message'))
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ session('message') }}</h6>
                    </div>
                    @endif
                    @if (session('thongbao'))
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ session('thongbao') }}</h6>
                    </div>
                    @endif
                    <form action="{{ route('orders_filter') }}" method="POST">
                        @csrf
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <div class="col-lg-2">
                            <h6 class="m-0 font-weight-bold text-primary">Đặt Phòng</h6>
                        </div>
                        <div class="col-lg-10 custom-filter">
                            <div class="col-lg-4">
                                <select class="form-control" name="diachi" id="settrangthai" required>
                                    <option disabled selected>Địa Chỉ</option>
                                    @foreach($gioithieu as $key)
                                        <option value="{{ $key->diachi }}">{{ $key->diachi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2 custom-filter">
                                {{-- <select class="form-control" name="chonngay" id="chonngay"  required>
                                    <option disabled selected>Ngày</option>
                                    <option value="@php $today = date("Y-m-d"); echo $today; @endphp">Hôm nay</option>
                                    <option value="@php $n=mktime(0,0,0,date("m"),date("d")-15,date("Y")); echo date("Y-m-d",$n);; @endphp">Trong 7 ngày</option>
                                </select> --}}
                                <input type="datetime-local" name="startdate" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <input type="datetime-local" name="enddate" class="form-control">
                            </div>
                            <div class="col-lg-2 custom-filter">
                                <select class="form-control" name="trangthai" id="settrangthai" required>
                                    <option disabled selected>Trạng Thái</option>
                                    {{-- <option disabled selected>Ngày</option> --}}
                                    <option value="Chờ Xử Lý">Chờ Xử Lý</option>
                                    <option value="Đã Xử Lý">Đã Xử Lý</option>
                                </select>

                                    <input type="hidden" id="homnay">
                                    <input type="hidden" id="trangthai">
                                    <button type="submit" class="btn btn-success btn-md custom-btn-filter">Lọc</button>
                            </div>

                        </div>
                    </div>
                    </form>
                    <div class="table-responsive">
                        <div class="card-body">
                        <div>
                        <table class="table align-items-center table-flush"  id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    {{-- <th>ID</th> --}}
                                    {{--  <th class="text-center">STT</th>  --}}
                                    {{-- <th>ID Phòng</th> --}}
                                    <th class="text-center">ID Hóa Đơn</th>
                                    {{-- <th class="text-center">Địa Chỉ</th> --}}
                                    <th class="text-center">Tên Khách Hàng</th>
                                    <th class="text-center">Số Điện Thoại</th>
                                    <th class="text-center">Địa Chỉ/Loại Phòng</th>
                                    <th class="text-center">Ngày Lập HĐ</th>
                                    {{-- <th>Status</th> --}}
                                    {{-- <th class="text-center">Ghi Chú</th> --}}
                                    <th class="text-center">Ngày Đến</th>
                                    <th class="text-center">Trạng Thái</th>
                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=0 ?>
                                @php
                                    $chitiet = 0;
                                @endphp
                                @foreach ($hoadon as $hd)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;"><a href="{{ route('orders-details',$hd->id_hd) }}">{{ $hd->id_hd }}</a></td>
                                            {{-- <td class="text-center" style="vertical-align: middle;">{{ $hd->diachi }}</td> --}}
                                            @foreach ($khachhang as $kh)
                                            @if($kh->id_tk==$hd->id_tk)
                                            <td class="text-center" style="vertical-align: middle;">{{ $kh->ten_tk }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $kh->sdt_kh }}</td>
                                            @endif




                                            @endforeach
                                            <td style="vertical-align: middle;">
                                                @foreach($chitietHD as $key)
                                                    @php
                                                        $tenphong = DB::table('phong')->where('id_phong',$key->id_phong)->join('loai_phong','phong.id_loai_phong','=','loai_phong.id_loai_phong')->first()->ten_loai_phong;
                                                    @endphp
                                                        @if($hd->id_hd==$key->id_hd)
                                                            <strong>Địa Chỉ:</strong>{{ $key->diachi }} / <strong>Loại Phòng:</strong>{{ $tenphong }}</br>
                                                        @endif
                                                @endforeach
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $hd->ngay_lap }}</td>
                                            {{-- <td class="text-center" style="vertical-align: middle;">{{ $hd->ghichu }}</td> --}}
                                            {{-- <td class="text-center" style="vertical-align: middle;">{{ number_format($hd->tongtien,0,',','.') }} VNĐ</td> --}}
                                            <td class="text-center" style="vertical-align: middle;">{{ $hd->ngayden }}</td>
                                            {{--  <td class="text-center"><img src="{{ asset('public/ttb/'.$tb->hinh_ttb) }}" alt="" style="height:60px;width: 60px;"></td>  --}}
                                            <td class="text-center" style="vertical-align: middle;">{{ $hd->trangthai }}</td>
                                            <td class="text-center">
                                                {{-- <a href="#" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $hd->id }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> --}}
                                                <a href="{{ route('ordersdelete',$hd->id_hd) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>

        <!--Row-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('couponadd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Thêm Mã Giảm Giá</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tên Mã Giảm Giá</label>
                                        <input class="form-control" name="tenma" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <a class="btn btn-success btn-sm" id="possible">Mã Giảm Giá</a>
                                        <input class="form-control"  name="magiam" id="magiamgia" style="float: right" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Số Lượng Giảm Giá</label>
                                        <input class="form-control" name="soluong"  min="1" type="number"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Điều Kiện Giảm Giá</label>
                                        <select class="form-control" name="dieukiengiam" required>
                                            <option disabled selected>Chọn</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Giá Giảm</label>
                                        <input class="form-control" name="giagiam" required>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="form-group">
                                    <label>Loại Phòng</label>
                                    <select class="category form-control" name="category[]" multiple style="width: 100%" selected value="12">
                                        <option value="1"  disabled hidden>13</option>
                                        <option value="1" selected disabled hidden>13</option>
                                        <option value="1">Laravel</option>
                                        <option value="2">Jquery</option>
                                        <option value="3">PHP</option>
                                        <option value="4">React</option>
                                        <option value="5">Jquery ui</option>
                                        <option value="6">Android</option>
                                        <option value="7">React Native</option>
                                        <option value="8">Vue js</option>
                                        <option value="9">Bootstrap 4</option>
                                    </select>
                                    </div>
                                </div> --}}
                                {{--  <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Icons</label>
                                        <input class="form-control" name="anh"  type="file"
                                            required>
                                    </div>
                                </div>  --}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        @foreach($hoadon as $hd)
            <div class="modal fade" id="exampleModalCenter{{ $hd->id_hd }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('couponupdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="text-center col-lg-12">
                                    <h2>Sửa Hóa Đơn Đặt Phòng</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tên Mã Giảm Giá</label>
                                            {{--  <input class="form-control" name="tenma" value="{{ $hd->ten_ma }}" type="text"
                                                required>  --}}
                                            <input class="form-control" name="id" value="{{ $hd->id_hd }}" type="hidden"
                                            required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Sửa</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
@endsection
