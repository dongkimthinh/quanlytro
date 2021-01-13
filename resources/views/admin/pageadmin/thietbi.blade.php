@extends('admin.masterpageadmin')
@section('title')
    Thiết bị
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Thiết bị</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Loại Phòng</li>
                <li class="breadcrumb-item active" aria-current="page">Các Loại Thiết Bị</li>
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
                        <h6 class="m-0 font-weight-bold text-primary">Các Loại Thiết Bị</h6>
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
                                    <th class="text-center">Tên Trang Thiết bị</th>
                                    {{-- <th>Status</th> --}}
                                    <th class="text-center">Icons</th>
                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=0 ?>
                                @foreach ($thietbi as $tb)
                                    @if($tb->id_ttb>0)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">
                                                @for($i = 0; $i <= count($thietbi); $i++)
                                                    {{ $stt = $stt + 1 }}
                                                    @break
                                                @endfor
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $tb->ten_ttb }}</td>
                                            <td class="text-center"><img src="{{ asset('public/ttb/'.$tb->hinh_ttb) }}" alt="" style="height:60px;width: 60px;"></td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $tb->id_ttb }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('thietbidelete',$tb->id_ttb) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endif

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
                    <form action="{{ route('thietbiadd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Thêm Thiết bị</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tên Thiết bị</label>
                                        <input class="form-control" name="tenthietbi" id="validationCustom01" type="text"
                                            required>
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Icons</label>
                                        <input class="form-control" name="anh" id="validationCustom01" type="file"
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
        @foreach($thietbi as $tb)
            <div class="modal fade" id="exampleModalCenter{{ $tb->id_ttb }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('thietbiupdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="text-center col-lg-12">
                                    <h2>Sửa Loại Phòng</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Trang thiết bị</label>
                                            <input class="form-control" name="trangthietbi" value="{{ $tb->ten_ttb }}">
                                            <input class="form-control" name="id" value="{{ $tb->id_ttb }}" hidden>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Icons</label>
                                        <input class="form-control" name="anh" id="validationCustom01" type="file"
                                            required>
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
