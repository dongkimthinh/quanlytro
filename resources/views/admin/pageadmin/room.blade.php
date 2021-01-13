@extends('admin.masterpageadmin')
@section('title')
    Room
@endsection
@section('content')
    <div class="container-fluid">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">

        <!-- Page Heading -->
        <h1 class="mb-2 text-gray-800 h3">Quản Lý Phòng Trọ</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Phòng</li>
                    <li class="breadcrumb-item active" aria-current="page">Danh Sách Phòng</li>
                  </ol>
                </div>
                  <!-- DataTales Example -->
        <div class="mb-4 shadow card">
            @if (session('message'))
                <div class="py-3 card-header">
                    <h6 class="m-0 font-weight-bold text-primary">{{ session('message') }}</h6>
                </div>
            @endif
            {{--  @error('anh')
                <div class="py-3 card-header">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $message }}</h6>
                </div>
            @enderror  --}}
            @if(session('thongbao'))
                <div class="py-3 card-header">
                    <h6 class="m-0 font-weight-bold text-primary">{{ session('thongbao') }}</h6>
                </div>
            @endif
            {{-- @foreach($phong as $ph)
                @foreach($loai_phong as $lp)
                    @if(!($ph->id_loai_phong!=$lp->id_loai_phong)) --}}
                        <div class="py-3 card-header">
                            <h6 class="m-0 font-weight-bold text-primary"><a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                class="btn btn-success fa-pull-right btn-sm"><i class="fas fa-plus"></i></a></h6>
                        </div>
                        {{-- @break($ph)
                    @endif
                @endforeach
            @endforeach --}}
            {{-- //table-responsive --}}
            <div class="card-body" style="zoom: 80%">
                <div class="table table-striped">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Loại phòng</th>
                                <th class="text-center">Hình ảnh</th>
                                <th class="text-center">Mô Tả Phòng</th>
                                <th class-"text-center">Số người</th>
                                <th class="text-center">Diện tích</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Bustle</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Loại phòng</th>
                                <th class="text-center">Hình ảnh</th>
                                <th class="text-center">Mô Tả Phòng</th>
                                <th class-"text-center">Số người</th>
                                <th class="text-center">Diện tích</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Bustle</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $stt=0 ?>
                            @foreach ($phong as $ph)
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @for ($i=1; $i <= count($phong);$i++)
                                            {{ $stt=$stt+1 }}
                                                @break;
                                        @endfor
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @foreach($loai_phong as $loai)
                                            @if($loai -> id_loai_phong == $ph -> id_loai_phong)
                                                {{ $loai -> ten_loai_phong }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @php
                                            $values = explode(",",$ph->hinh_phong);
                                        @endphp
                                        @for ($i = 0; $i < count($values); $i++)
                                            @if($values[$i])
                                                <img src="{{ asset('public/hinhtro/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                            @endif
                                        @endfor
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $ph->mota }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $ph-> songuoi }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $ph-> dientich }}m²</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $ph->soluong }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ number_format($ph->gia,0,',','.') }} VNĐ</td>
                                    <td class="text-center" style="vertical-align: middle">
                                        <form action="{{ route('roomadmindelete',$ph-> id_phong) }}" method="GET">
                                            @csrf
                                         <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{ $ph -> id_phong }}"><i class="fas fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
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
                    <form class="needs-validation" action="{{ route('roomadminpost') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Thêm Mới</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Loại Phòng</label>
                                    <select class="form-control" id="guest" name="loaiphong" required>
                                        @foreach ($loai_phong as $loai)
                                            <option value="{{ $loai->ten_loai_phong }}">{{ $loai->ten_loai_phong }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input class="form-control" name="gia" id="validationCustom02" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Diện Tích</label>
                                        <input class="form-control" name="dientich" id="validationCustom03" type="number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><span>Ảnh</span></label>
                                        <input class="form-control" type="file" id="validationCustom05" name="anh[]" multiple required>
                                        @error('anh')
                                            <div class="valid-feedback" for = "validationCustom05">
                                                <h6 class="m-0 font-weight-bold text-primary">{{ $message }}</h6>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>Số lượng</label>
                                    <input class="form-control" type="text" onkeypress="return isNumberKey1(event)" id="soluong"  name="soluong" required>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Số người</label>
                                        <textarea class="form-control" name="songuoi" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" name="mota" required></textarea>
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
        @foreach ($phong as $ph)
            <div class="modal fade" id="exampleModalCenter{{ $ph->id_phong }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('editpostroomadmin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="text-center col-lg-12">
                                    <h2>Sửa Loại Phòng</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Loại Phòng</label>
                                            @foreach($loai_phong as $loai)
                                            @if($loai -> id_loai_phong == $ph -> id_loai_phong)
                                                <input class="form-control" type="text" name="loaiphong" value="{{ $loai->ten_loai_phong }}" disabled>
                                                <input class="form-control" type="text" name="id" value="{{ $ph->id_phong }}" hidden>
                                            @endif
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Tên ảnh đã úp</label>
                                            @php
                                                $values = explode(",",$ph->hinh_phong);
                                            @endphp
                                            <select name="anh[]" class="mul-select" value="$values" multiple="true" style="width: 100%">
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
                                                <img src="{{ asset('public/hinhtro/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                            @endif
                                        @endfor
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="file" id="validationCustom05" name="anh1[]" multiple="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Diện tích</label>
                                            <input class="form-control" type="text" id="validationCustom05" value="{{ $ph->dientich }}" name="dientich" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Giá</label>
                                        <input class="form-control" type="text" id="validationCustom05" value="{{ $ph->gia }}" name="gia" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Số lượng</label>
                                        <input class="form-control" type="text" onkeypress="return isNumberKey(event,{{ $ph->id_phong }})" id="soluong{{ $ph->id_phong }}" value="{{ $ph->soluong }}" name="soluong" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Số người</label>
                                            <textarea class="form-control" name="songuoi" required>{{ $ph->songuoi }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea class="form-control" name="mota" required>{{ $ph->mota }}</textarea>
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
