@extends('admin.masterpageadmin')
@section('title')
    Ảnh Nổi Bật
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Ảnh Nổi Bật</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ảnh Nổi Bật</li>
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
                        <h6 class="m-0 font-weight-bold text-primary">Các Ảnh Nổi Bật Ở Trang Chủ</h6>
                        {{-- <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                            class="btn btn-success btn-sm fa-pull-right"><i class="fas fa-plus"></i></a> --}}
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">


                        <table class="table align-items-center table-flush"  id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Địa Chỉ</th>
                                    <th class="text-center">Ảnh</th>
                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; $stt=0 ?>
                                @foreach($highlightImg as $hiImg)
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @for($j = 0; $j <= count($highlightImg);$j++)
                                            {{ $stt=$stt+1 }}
                                            @break
                                        @endfor
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $hiImg->diachi }}</td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @php
                                            $values = explode(",",$hiImg->anhnoibat);
                                        @endphp
                                        @for ($i = 0; $i < count($values); $i++)
                                            @if($values[$i])
                                                <img src="{{ asset('public/khungcanhvaanhnoibat/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                            @endif

                                        @endfor
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{ $hiImg -> id }}"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('highlightDelete',$hiImg->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý ảnh nổi bật</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('highlightImgAdd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Thêm Ảnh Nổi Bật</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Địa Chỉ</label>
                                            <input class="form-control" name="diachi">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        @php
                                            $values = explode(",",$hiImg->anhnoibat);
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
                                            <img src="{{ asset('public/khungcanhvaanhnoibat/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                        @endif
                                    @endfor
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input class="form-control" type="file" id="validationCustom05" name="anh[]" required>
                                    </div>
                                </div> -->
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

        @foreach($highlightImg as $hiImg)
        <div class="modal fade" id="exampleModalCenter{{ $hiImg->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý ảnh nổi bật</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('highlightImgUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Chỉnh sửa ảnh nổi bật</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Địa Chỉ</label>

                                        <input class="form-control" name="diachi" value="{{ $hiImg->diachi }}" readonly>

                                        <input class="form-control" name="id" hidden value="{{ $hiImg->id }}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Tên ảnh đã úp</label>
                                            @php
                                                $values = explode(",",$hiImg->anhnoibat);
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
                                                <img src="{{ asset('public/anhnoibat/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                            @endif
                                        @endfor
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="file" id="validationCustom05" name="anh1[]" multiple="true">
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
