@extends('admin.masterpageadmin')
@section('title')
    Type Room
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Loại phòng</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Loại Phòng</li>
                <li class="breadcrumb-item active" aria-current="page">Các Loại Phòng</li>
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
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Loại phòng</h6>
                        <div class="pull-right">
                             <a href="#" data-toggle="modal" data-target="#exampleModalCenter1"
                            class="btn btn-success btn-sm "><i class="fas fa-plus"></i></a>
                            {{-- <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Sửa Thiết Bị Tron Phòng</a> --}}
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th>Loại Phòng</th>
                                    {{-- <th>ID Phòng</th> --}}
                                    <th class="text-center">Trang Thiết Bị</th>
                                    {{-- <th class="text-center">Số Lượng Phòng</th> --}}
                                    {{-- <th class="text-center">Ảnh Mô Tả Loại Phòng</th> --}}

                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;
                                    $stt = 0;
                                ?>
                                @foreach ($loaiphong as $ph)
                                    <tr>
                                        <td class="text-center">
                                            @for ($j = 0; $j <= count($loaiphong); $j++)
                                                {{ $stt = $stt + 1 }}
                                                @break
                                            @endfor
                                        </td>
                                        <td>{{ $ph->ten_loai_phong }}</td>

                                        <td>
                                            {{ $ph->trangthietbi }}
                                        </td>
                                        {{-- <td class="text-center">
                                            @for (; $i <= count($loaiphong);)
                                                {{ $arr[$i] }}
                                                <?php $i = $i + 1; ?>
                                                @break;
                                            @endfor
                                        </td> --}}
                                        {{-- <td class="text-center">
                                            <img src="{{ asset('public/loaiphong/'.$ph->anh) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                        </td> --}}
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter1{{ $ph->id_loai_phong }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('typeroomsadmindetele',$ph->id_loai_phong) }}"
                                                 class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Xóa hết tất cả dữ liệu liên quan đến loại phòng"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Xóa hết tất cả dữ liệu liên quan đến loại phòng"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        @foreach ($loaiphong as $lp)
            <div class="modal fade" id="exampleModalCenter1{{ $lp->id_loai_phong }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('typeroomsadminupdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="text-center col-lg-12">
                                    <h2>Sửa Loại Phòng</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Loại Phòng</label>
                                            <input class="form-control" name="loaiphong" value="{{ $lp->ten_loai_phong }}">
                                            <input type="hidden" name="id" value="{{ $lp->id_loai_phong }}">
                                        </div>
                                    </div>
                                    @php
                                        $values = explode(",",$lp->trangthietbi);
                                    @endphp
                                    @php
                                        $j=0;
                                    @endphp
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Trang Thiết Bị</label>
                                            <select name="thietbi[]" class="mul-select" multiple="true" style="width: 100%">
                                                @foreach($ttb as $tb)
                                                    <option value="{{ $tb->ten_ttb }}" {{ isset($values[$j])?'selected':'' }}>{{ $tb->ten_ttb }}</option>
                                                    @php
                                                        $j++;
                                                    @endphp
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Sửa Ảnh Mô Tả Khung Cảnh Cho Loại Phòng</label>
                                            <input type="file" name="anh" class="form-control">
                                        </div>
                                    </div> --}}
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
        <!--Row-->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('typeroomsadminadd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Thêm loại phòng</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Loại Phòng</label>
                                        <input class="form-control" name="loaiphong" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Trang Thiết Bị</label>
                                        <select name="thietbi[]" class="mul-select" multiple="true" style="width: 100%">
                                            @foreach ($ttb as $tb)
                                                <option value="{{ $tb->ten_ttb }}">{{ $tb->ten_ttb }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Thêm Ảnh Mô Tả Khung Cảnh Cho Loại Phòng</label>
                                        <input type="file" name="anh" class="form-control" required>
                                    </div>
                                </div> --}}
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
    </div>
@endsection
