@extends('admin.masterpageadmin')
@section('title')
    Liên Hệ
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Thông Tin Quản Lý Trang Web</h1>
            {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate
                the demo table below.
                For more information about DataTables, please visit the <a target="_blank"
                    href="https://datatables.net">official DataTables documentation</a>.</p>
            --}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Trang Chủ</a></li>
                <li class="breadcrumb-item">Thông Tin</li>
                <li class="breadcrumb-item active" aria-current="page">Thông Tin Quản Lý Trang Web</li>
            </ol>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @if (session('message'))
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ session('message') }}</h6>
                </div>
            @endif
            @if (session('thongbao'))
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ session('thongbao') }}</h6>
                </div>
            @endif
            {{-- @error('anh')
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ $message }}</h6>
            </div>
            @enderror --}}

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="#" data-toggle="modal"
                        data-target="#exampleModalCenter" class="btn btn-success fa-pull-right btn-sm"><i
                            class="fas fa-plus"></i></a></h6>
            </div>
            {{-- //table-responsive --}}
            <div class="card-body" style="zoom: 80%">
                <div class="table table-striped">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 0.1%">STT</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Số điện thoại</th>
                                {{-- <th class="text-center">Email</th>
                                <th class="text-center">Giới tính</th> --}}
                                {{-- <th>Salary</th> --}}
                                <th class="text-center" style="width: auto">Hành động</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Tên Tài Khoản</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Số điện thoại</th>
                                {{-- <th class="text-center">Email</th>
                                <th class="text-center">Giới tính</th> --}}
                                {{-- <th>Salary</th> --}}
                                <th class="text-center" style="width: 9%">Hành động</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $stt = 0; ?>
                            @foreach ($lienhe as $lh)
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @for ($i = 1; $i <= count($lienhe); $i++)
                                            {{ $stt = $stt + 1 }}
                                            @break;
                                        @endfor
                                    </td>
                                    @php
                                        $phone = str_replace(" ", "", $lh->sdt);
                                        if(strlen($phone)==10){
                                            $kq = substr($phone, 0, 4) . " " . substr($phone, 4, 3) . " " . substr($phone, 7, 3);
                                        } else{
                                            $kq = substr($phone, 0, 4) . " " . substr($phone, 4, 4) . " " . substr($phone, 8, 3);
                                        }
                                    @endphp
                                    <td class="text-center" style="vertical-align: middle;">{{ $lh->ten }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $lh->email }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $kq }}</td>
                                    <td class="text-center" style="vertical-align: middle">
                                            <a class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $lh->id }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <a href="{{ route('deletelienhe',$lh->id) }}" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
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
                    <form class="needs-validation" action="{{ route('addlienhe') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="col-lg-12 text-center">
                                <h2>Thêm Mới</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input class="form-control" name="ten" id="validationCustom01" type="text" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" id="validationCustom02" type="email"
                                            required>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Số Điện Thoại</label>
                                        <input class="form-control" name="sdt" id="validationCustom03" type="number"
                                            required>
                                    </div>
                                </div>
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
        @foreach($lienhe as $lh)
            <div class="modal fade" id="exampleModalCenter{{ $lh->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle{{ $lh->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('postlienhe') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-lg-12 text-center">
                                    <h2>Sửa</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Tên</label>
                                            <input name="id" value="{{ $lh->id }}" style="display: none">
                                            <input class="form-control" name="ten" type="text" required
                                                value="{{ $lh->ten }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" required
                                                value="{{ $lh->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Số Điện Thoại</label>
                                            <input class="form-control" name="sdt" type="number" required
                                                value="{{ $lh->sdt }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
@endsection
