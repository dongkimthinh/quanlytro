@extends('masterpage')
@section('title')
    Register
@endsection
@section('content')
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container custom-container-logincart">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Đăng Ký</h2>
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
                                        <td>0703 150 380 (Mr.Thịnh) </td>
                                    </tr>
                                    <tr>
                                        <td class="c-o">Email:</td>
                                        <td>dongkimthinh123@gmail.com</td>
                                    </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="custom-card">
                    <form class="contact-form" action="{{ route('registerpost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="
                                form-control
                               " name="username" type="text" placeholder="Tên tài khoản">
                                @error('username')
                                   {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" name="password" type="password" placeholder="Mật khẩu">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" name="nhaplaimatkhau" type="password"
                                    placeholder="Nhập lại mật khẩu">
                                    @error('nhaplaimatkhau')
                                    {{ $message }}
                                    @enderror
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" name="email" type="email" placeholder="Địa chỉ email">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>


                            <div class="col-lg-6">
                                <select class="form-control" id="guest"  name="gioitinh" style="color:#aaaac4 !important;padding:6px 12px 6px 25px;margin: 0px 0px 28px">
                                    <option value="" disabled selected>Giới tính</option>
                                    <option value="Nam" style="width: auto;" data-width="100%">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                                @error('gioitinh')
                                    {{ $message }}
                                @enderror
                            </div>
                            {{-- <div class="col-lg-6">
                                <input class="form-control" name="anh" type="file">
                                @error('anh')
                                    {{ $message }}
                                @enderror
                            </div> --}}
                            <div class="col-lg-6">
                                <input class="form-control" name="sdt" type="tel" placeholder="Số điện thoại">
                                @error('sdt')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <input class="form-control" name="fullname" type="text" placeholder="Họ và tên">
                                @error('fullname')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                @if(session('message'))
                                    <span id="error">{{ session('message') }}</span>
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit">Đăng ký</button>
                                <a class="btn btn-secondary" href="{{ route('login') }}">Đăng Nhập</a>
                            </div>

                            <!-- <div class="col-lg-12">
                                    <textarea placeholder="Your Message"></textarea>
                                    <button type="submit"></button>

                                </div> -->

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
    <!-- Contact Section End -->
@endsection
