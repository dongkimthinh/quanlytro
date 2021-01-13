@extends('admin.masterpageadmin')
@section('title')
    Đăng Tin
@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Đăng Tin</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Tin Tức</li>
                <li class="breadcrumb-item active" aria-current="page">Đăng Tin</li>
            </ol>
        </div>

        <div class="row">
            <div class="mb-4 col-lg-12">
                <!-- Simple Tables -->
                <!-- <div class="card"> -->
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
                    <!-- <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Quản lý tin</h6>
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                            class="btn btn-success btn-sm fa-pull-right"><i class="fas fa-plus"></i></a>
                    </div> -->
                    <!-- <div class="table-responsive">
                        <div class="card-body"> -->

                            <div class="modal-dialog modal-dialog-centered custom-post-news" role="document">
                                <div class="modal-content">
                                    <!-- <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div> -->
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
                                                            <script>
                                                                CKEDITOR.replace( 'noidung', {
                                                                    filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
                                                                    filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
                                                                    filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
                                                                    filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                                                                    filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                                                                    filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                                                                } );
                                                            </script>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Ảnh</label>
                                                        <input class="form-control" type="file" name="anh" multiple required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Tác Giả</label>
                                                        <input class="form-control" type="text" name="tacgia" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Đăng</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        <!-- </div>
                    </div>

                </div>-->
            </div>
        </div>
    </div>
@endsection
