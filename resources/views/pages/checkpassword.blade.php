@extends('masterpage')
@section('title')
    Tìm Mật Khẩu
@endsection
@section('content')
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container custom-container-logincart">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Đăng Nhập</h2>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p> -->
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>18 Nguyễn Sáng,Phường Tây Thạnh,Quận Tân Phú, TP.HCM</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>17B Tân Trụ, Phường 15, Quận Tân Bình, TP.HCM </td>
                                </tr>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>31 Cống Lỡ, Phường 15, Quận Gò Vấp, TP.HCM</td>
                                </tr>
                                <tr>
                                    <td class="c-o">SĐT:</td>
                                    <td>0703 150 380</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>dongkimthinh123@gmail.com</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- {{ request()->route('id') }} --}}
                <div class="col-lg-7 offset-lg-1">
                    <div class="custom-card">
                        <form action="{{ route('postcheckpass',request()->route('id')) }}" class="contact-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Mã Xác Thực</label>
                                    <input class="form-control" name="maxacthuc" type="text"
                                        placeholder="Mã Xác Thực">
                                    @if ($errors->has('maxacthuc'))
                                        {{ $errors->first('maxacthuc') }}
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <label>Mật Khẩu Mới</label>
                                    <input class="form-control" name="Password" type="password" placeholder="Mật Khẩu">
                                    @error('Password')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <label>Nhập Lại Mật Khẩu</label>
                                    <input class="form-control" name="nhaplaimatkhau" type="password" placeholder="Nhập Lại Mật Khẩu">
                                    @error('nhaplaimatkhau')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" type="submit"><span>Thay Đổi Mật Khẩu</span></button>
                                </div>
                                <div class="col-lg-12">
                                    @if (session()->has('massage'))
                                        <span>{{ session('massage') }}</span>
                                    @endif
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.063756558014!2d106.62815801526047!3d10.806428961593074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752958610bf1e9%3A0x7f5c1379aaabb441!2zMTggTmd1eeG7hW4gU8OhbmcsIFTDonkgVGjhuqFuaCwgVMOibiBQaMO6LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sbd!4v1604373012788!5m2!1sen!2sbd"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="">Quên Mật Khẩu?</h4>
            </div>
                <div class="modal-body">
                <p>Vui lòng cung cấp email hoặc số điện thoại đăng nhập để lấy lại mật khẩu.</p>
                <form id="demoForm" action="" method="post">
                    @csrf
                <input id="email" name="email" class="form-control">
                </form>
                <div id="mess" style="color: red"></div>

                </div>
                <div class="modal-footer">
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                <button id="quenmatkhau" class="btn btn-primary">Gửi</button>
                </div>

          </div>
        </div>
    </div>
    <!-- Contact Section End -->
@endsection
