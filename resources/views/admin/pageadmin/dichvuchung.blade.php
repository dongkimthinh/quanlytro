@extends('admin.masterpageadmin')
@section('title')
    Dịch Vụ Chung
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dịch Vụ Chung</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Dịch Vụ</li>
                <li class="breadcrumb-item active" aria-current="page">Dịch Vụ Chung</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    @if (session('message'))
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ session('message') }}</h6>
                    </div>
                    @endif
                    @if (session('thongbao'))
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ session('thongbao') }}</h6>
                    </div>
                    @endif
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Các Dịch Vụ Chung</h6>
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
                                    <th class="text-center">Tiêu Đề Dịch Vụ</th>
                                    {{-- <th>Status</th> --}}
                                    <th class="text-center">Mô Tả</th>
                                    <th class="text-center">Hình</th>
                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=0 ?>
                                @foreach ($dichvuchung as $dv)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">
                                                @for($i = 0; $i <= count($dichvuchung); $i++)
                                                    {{ $stt = $stt + 1 }}
                                                    @break
                                                @endfor
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $dv->tendichvu }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $dv->mota }}</td>
                                            @php
                                                $values = explode(",",$dv->hinh);
                                            @endphp
                                            <td class="text-center">
                                            @for($i = 0; $i < count($values); $i++)
                                               <img src="{{ asset('public/dichvu/'.$values[$i]) }}" alt="" style="height:60px;width: 60px;">
                                            @endfor
                                            </td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $dv->id }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('thietbidelete',$dv->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                    <form action="{{ route('dichvuchungadd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="col-lg-12 text-center">
                                <h2>Thêm Dịch Vụ</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tiêu đề dịch vụ:</label>
                                        <input class="form-control" name="tieudedichvu" id="validationCustom01" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mô tả:</label>
                                        <input class="form-control" name="mota" id="validationCustom01" type="text"
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
                                        <label>Ảnh:</label>
                                        <input class="form-control" name="anh[]" multiple id="validationCustom01" type="file"
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
        @foreach($dichvuchung as $dv)
        <div class="modal fade" id="exampleModalCenter{{ $dv->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('editdichvuchung') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Sửa Dịch Vụ Chung</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input class="form-control" name="tieude" value="{{ $dv->tendichvu }}" required>
                                        <input class="form-control" name="id" value="{{ $dv->id }}" required hidden>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" name="mota" required>{{ $dv->mota }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tên Ảnh Đã Upload</label>
                                        @php
                                            $values = explode(",",$dv->hinh);
                                        @endphp
                                        <select name="anh1[]" class="mul-select" value="$values" multiple="true" style="width: 100%">
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
                                            <img src="{{ asset('public/dichvu/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                        @endif
                                    @endfor
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input class="form-control" name="anh[]" multiple type="file" value="{{ $dv->tendichvu }}">
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
