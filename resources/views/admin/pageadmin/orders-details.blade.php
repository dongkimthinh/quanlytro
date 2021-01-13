@extends('admin.masterpageadmin')
@section('title')
    Chi Tiết Đặt Phòng
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Chi Tiết Đặt Phòng</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Dịch Vụ</li>
                <li class="breadcrumb-item active" aria-current="page">Các Loại Mã Giảm Giá</li>
            </ol>
        </div>

        <div class="row">
            <div class="mb-4 col-lg-8">
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
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Mã Hóa Đơn:{{ $chitiet->id_hd }}</h6>
                        {{--  <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                            class="btn btn-success btn-sm fa-pull-right"><i class="fas fa-plus"></i></a>  --}}
                        <h6 class="m-0 font-weight-bold text-primary">Ngày Đến:{{ $chitiet->ngayden }}</h6>
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">Sản Phẩm</th>
                                    <th class="text-center">Số Lượng</th>
                                    {{-- <th>Status</th> --}}
                                    <th class="text-center">Địa Chỉ</th>
                                    {{-- <th class="text-center">Tổng Tiền</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($chitietHD as $CTHD)
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">{{ $CTHD->ten_loai_phong }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $CTHD->soluong }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $CTHD->diachi }}</td>
                                    {{-- <td class="text-center" style="vertical-align: middle;">{{ number_format($CTHD->dongia,0,',','.') }}</td> --}}
                                    {{-- <td class="text-center" style="vertical-align: middle;">{{ number_format($CTHD->dongia*$CTHD->soluong,0,',','.') }}</td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        </div>
                    </div>

                </div>
            </div>
            <div class="mb-4 col-lg-4">
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
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">THÔNG TIN KHÁCH HÀNG
                        </h6>
                        {{--  <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                            class="btn btn-success btn-sm fa-pull-right"><i class="fas fa-plus"></i></a>  --}}
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">Mô Tả</th>
                                    <th class="text-center">Thông Tin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">Tên</td>
                                    {{-- <td class="text-center" style="vertical-align: middle;">{{ number_format($chitiet->tongtien+$chitiet->giamgia,0,',','.') }}</td> --}}
                                    <td class="text-center" style="vertical-align: middle;">{{ $chitiet->tenkh }}</td>
                                </tr>
                                {{-- <tr>
                                    <td class="text-center" style="vertical-align: middle;">Giảm Giá</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ number_format($chitiet->giamgia,0,',','.')  }}</td>
                                </tr> --}}
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">Số Điện Thoại</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $chitiet->sdt_kh }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">Email</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $chitiet->email_kh }}</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3 text-center">Ghi Chú</h4>
                        <address class="mb-0 font-14 address-lg">
                            {{ $chitiet->ghichu }}
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>

        <!--Row-->
    </div>
@endsection
