@extends('admin.masterpageadmin')
@section('title')
    Giới Thiệu
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Giảm Giá</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Dịch Vụ</li>
                <li class="breadcrumb-item active" aria-current="page">Các Loại Mã Giảm Giá</li>
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
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Các Loại Mã Giảm Giá</h6>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                            class="btn btn-success btn-sm fa-pull-right"><i class="fas fa-plus"></i></a>
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">


                        <table class="table align-items-center table-flush"  id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    {{-- <th>ID</th> --}}
                                    <th class="text-center">STT</th>
                                    {{-- <th>ID Phòng</th> --}}
                                    <th class="text-center">Địa Chỉ</th>
                                    <th class="text-center">Tiêu Đề</th>
                                    {{-- <th>Status</th> --}}
                                    <th class="text-center">Nội Dung</th>
                                    <th class="text-center">Ảnh</th>
                                    {{-- <th class="text-center">Mã Giảm Giá</th> --}}
                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=0 ?>
                                @foreach ($gioithieu as $gt)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">
                                                @for($i = 0; $i <= count($gioithieu); $i++)
                                                    {{ $stt = $stt + 1 }}
                                                    @break
                                                @endfor
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $gt->diachi }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $gt->tieude }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $gt->noidung }}</td>
                                            {{-- <td class="text-center" style="vertical-align: middle;">
                                                @foreach($dkgiam as $dk)
                                                    @if($dk->id==$cp->dieu_kien_giam)
                                                        {{ $dk->dieu_kien_giam }}
                                                    @endif
                                                @endforeach
                                            </td> --}}
                                            @php
                                                $values = explode(",",$gt->anh)
                                            @endphp
                                            <td class="text-center" style="vertical-align: middle;">
                                                @foreach($values as $key)
                                                <img src="{{ asset('public/img/about/'.$key) }}" alt="" style="height:60px;width: 60px;">
                                                @endforeach
                                            </td>
                                            {{-- <td class="text-center" style="vertical-align: middle;">{{ $gt->magiamgia }}</td> --}}
                                            <td class="text-center" style="vertical-align: middle;">
                                                <a href="#" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $gt->id }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('gioithieudelete',$gt->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                    <form action="{{ route('gioithieuadd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Thêm Giới Thiệu</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Địa Chỉ</label>
                                        <input class="form-control" name="ten" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input class="form-control"  name="tieude" id="magiamgia" style="float: right" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea class="form-control" name="noidung"  min="1" type="number"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input class="form-control" type="file" name="anh[]" multiple required>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mã giảm giá</label>
                                        <input class="form-control" type="text" name="magiamgia" required>
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
        @foreach($gioithieu as $gt)
        <div class="modal fade" id="exampleModalCenter{{ $gt->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('gioithieuupdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="text-center col-lg-12">
                            <h2>Sửa Giới Thiệu</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control" name="diachi" type="text" value="{{ $gt->diachi }}"
                                        required>
                                        <input type="hidden" name="id" value="{{ $gt->id }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input class="form-control"  name="tieude" id="magiamgia" value="{{ $gt->tieude }}" style="float: right" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" name="noidung"  min="1" type="number"
                                        required>{{ $gt->noidung }}</textarea>
                                </div>
                            </div>

                            {{-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Mã giảm giá</label>
                                    <input class="form-control" type="text" name="magiamgia" value="{{ $gt->magiamgia }}" required>
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tên ảnh đã úp</label>
                                    @php
                                        $values = explode(",",$gt->anh);
                                    @endphp
                                    <select name="anhdaup[]" class="mul-select"  multiple="true" style="width: 100%">
                                        @for ($i = 0; $i < count($values); $i++)
                                                <option value="{{ $values[$i] }}" selected>{{ $values[$i] }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                @for ($i = 0; $i < count($values); $i++)
                                    @if($values[$i])
                                        <img src="{{ asset('public/img/about/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                    @endif
                                @endfor
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input class="form-control" type="file"  name="anh[]" multiple>
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
