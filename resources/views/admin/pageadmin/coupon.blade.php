@extends('admin.masterpageadmin')
@section('title')
    Mã Giảm Giá
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
                                    <th class="text-center">Tên Mã Giảm Giá</th>
                                    <th class="text-center">Mã Giảm Giá</th>
                                    {{-- <th>Status</th> --}}
                                    <th class="text-center">Số Lượng Mã Giảm Giá</th>
                                    <th class="text-center">Điều Kiện Giảm Giá</th>
                                    <th class="text-center">Giá Giảm</th>
                                    <th class="text-center">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=0 ?>
                                @foreach ($coupon as $cp)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">
                                                @for($i = 0; $i <= count($coupon); $i++)
                                                    {{ $stt = $stt + 1 }}
                                                    @break
                                                @endfor
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $cp->ten_ma }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $cp->magiamgia }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $cp->soluong }}</td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                @foreach($dkgiam as $dk)
                                                    @if($dk->id==$cp->dieu_kien_giam)
                                                        {{ $dk->dieu_kien_giam }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $cp->gia_giam }}</td>
                                            {{--  <td class="text-center"><img src="{{ asset('public/ttb/'.$tb->hinh_ttb) }}" alt="" style="height:60px;width: 60px;"></td>  --}}
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $cp->id }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('coupondelete',$cp->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
        @foreach($coupon as $cp)
            <script>
                $(document).ready(function() {
                    $("#possible{{ $cp->id }}").on('click',function(){
                        var result           = "";
                        var characters       = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                        var charactersLength = characters.length;
                            for ( var i=0; i < 10; i++ ) {
                                result += characters.charAt(Math.floor(Math.random() * charactersLength));
                            }
                        {{--  return result;  --}}
                        $("#magiamgia{{ $cp->id }}").val(result);
                        {{--  console.log(result);  --}}
                    });

                });
            </script>
        @endforeach
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
                                            @foreach($dkgiam as $dk)
                                                <option value="{{ $dk->id }}">{{ $dk->dieu_kien_giam }}</option>
                                            @endforeach
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
        @foreach($coupon as $cp)
            <div class="modal fade" id="exampleModalCenter{{ $cp->id }}" tabindex="-1" role="dialog"
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
                                    <h2>Thêm Mã Giảm Giá</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tên Mã Giảm Giá</label>
                                            <input class="form-control" name="tenma" value="{{ $cp->ten_ma }}" type="text"
                                                required>
                                            <input class="form-control" name="id" value="{{ $cp->id }}" type="hidden"
                                            required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <a class="btn btn-success btn-sm coupon" id="possible{{ $cp->id }}" style="">Mã Giảm Giá</a>
                                            <input class="form-control input-coupon" name="magiam" value="{{ $cp->magiamgia }}" id="magiamgia{{ $cp->id }}" type="text"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Số Lượng Giảm Giá</label>
                                            <input class="form-control" name="soluong" value="{{ $cp->soluong }}" min="1" type="number"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Điều Kiện Giảm Giá</label>
                                            <select class="form-control" name="dieukiengiam" selected data-selected="{{ $cp->dieu_kien_giam }}" required>
                                                {{--  <option disabled selected>{{ $cp->dieu_kien_giam }}</option>  --}}
                                                <option value="Giảm theo tiền">Giảm theo tiền</option>
                                                <option value="Giảm theo %">Giảm theo %</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Giá Giảm</label>
                                            <input class="form-control" name="giagiam" value="{{ $cp->giagiam }}" required>
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
                                            <input class="form-control" name="anh" id="validationCustom01" type="file"
                                                required>
                                        </div>
                                    </div>  --}}
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
