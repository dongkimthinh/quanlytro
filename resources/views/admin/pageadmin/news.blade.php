@extends('admin.masterpageadmin')
@section('title')
    Tin tức
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Tin Tức</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tin Tức</li>
                <li class="breadcrumb-item active" aria-current="page">Quản lý tin</li>
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
                        <h6 class="m-0 font-weight-bold text-primary">Quản lý tin</h6>
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
                                    <th class="text-center">Tiêu Đề</th>
                                    {{-- <th>Status</th> --}}
                                    <th class="text-center">Nội Dung Tóm Tắt</th>
                                    <th class="text-center">Nội Dung</th>
                                    <th class="text-center">Ảnh</th>
                                    <th class="text-center">Ngày Đăng</th>
                                    <th class="text-center">Tác Giả</th>
                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=0 ?>
                                @foreach ($news as $n)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">
                                                @for($i = 0; $i <= count($news); $i++)
                                                    {{ $stt = $stt + 1 }}
                                                    @break
                                                @endfor
                                            </td>

                                            <td class="text-center" style="vertical-align: middle;width:100px"><a href="{{ route('newsEdit',$n->id_tin) }}">{{ $n->tieude }}</a></td>
                                            <td class="text-center custom-ndtt" >{{ $n->noidung_tt }}</td>
                                            <td class="text-center custom-nd" >
                                            @php
                                                $nd=$n->noidung;
                                                echo strip_tags($nd);
                                            @endphp
                                            </td>

                                            @php

                                                $anh = $n->hinh_anh_tin;
                                            @endphp
                                            <td class="text-center">

                                                <img src="{{ asset('public/img/blog/'.$anh) }}" alt="" style="height:60px;width: 60px;">

                                            </td>
                                            <td class="text-center" >{{ $n->ngaydang }}</td>
                                            <td class="text-center" >{{ $n->tacgia }}</td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $n->id_tin }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('newsDelete',$n->id_tin) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý tin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('newsAdd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Thêm Tin Mới</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input class="form-control"  name="tieude" id="tieude" style="float: right" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nội dung tóm tắt</label>
                                        <textarea class="form-control" name="noidung_tt"  min="1" type="text"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea class="form-control" name="noidung"  min="1" type="text"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input class="form-control" type="file" name="anh" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tác Giả</label>
                                        <input id="date-in" class="form-control" type="date" name="tác giả" required>
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
        @foreach($news as $n)
        <div class="modal fade" id="exampleModalCenter{{ $n->id_tin }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quản lý tin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('newsUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="text-center col-lg-12">
                            <h2>Sửa Tin</h2>
                        </div>
                        <div class="row">
                            <!-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control" name="ten" type="text" value=""
                                        required>
                                        <input type="hidden" name="id" value="">
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input class="form-control"  name="tieude" id="tieude" value="{{ $n->tieude }}" style="float: right" type="text"
                                        required>
                                        <input type="hidden" name="id_tin" value="{{ $n->id_tin }}">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nội dung tóm tắt</label>
                                    <textarea class="form-control" name="noidung_tt"  min="1" type="text"
                                        required>{{ $n->noidung_tt }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" name="noidung"  min="1" type="text"
                                        required>{{ $n->noidung }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tác Giả</label>
                                    <input class="form-control" type="text" name="tacgia" value="{{ $n->tacgia }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tên ảnh đã úp</label>
                                    @php
                                        $values = explode(",",$n->hinh_anh_tin);
                                    @endphp
                                    <select name="anhdaup[]" class="mul-select" value="$values" multiple="true" style="width: 100%">
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
                                        <img src="{{ asset('public/img/blog/'.$values[$i]) }}" alt="" style="height:60px ;width: 60px;padding: 5px 0px 5px">
                                    @endif
                                @endfor
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input class="form-control" type="file" name="anh">
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
