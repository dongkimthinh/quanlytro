@extends('admin.masterpageadmin')
@section('title')
    Hiệu Ứnng
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Hiệu Ứng</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Hiệu Ứng</li>
                <li class="breadcrumb-item active" aria-current="page">Các Hiệu Ứng</li>
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
                        <h6 class="m-0 font-weight-bold text-primary">Hiệu Ứng</h6>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                            class="btn btn-success btn-sm fa-pull-right"><i class="fas fa-cog"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Hiệu ứng</th>
                                    <th class="text-center">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; $stt=0 ?>
                                @foreach ($hieuung as $h)
                                    <tr>
                                        <td class="text-center">
                                            @for($j = 0; $j <= count($hieuung);$j++)
                                                {{ $stt=$stt+1 }}
                                                @break
                                            @endfor
                                        </td>
                                        <td class="text-center">{{ $h->hieu_ung }}</td>
                                        <td class="text-center">{{ $h->trangthai }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                    <form action="{{ route('hieuungsetting') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="text-center col-lg-12">
                                <h2>Cài đặt hiệu ứng</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Hiệu úng</label>
                                            <select class="form-control" id="guest" name="hieuung" required>
                                                @foreach($hieuung as $h)
                                                    <option value="{{ $h->hieu_ung }}">{{ $h->hieu_ung }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Cài đặt</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
