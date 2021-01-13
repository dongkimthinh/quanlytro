@extends('masterpage')
@section('title')
    Login
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
                    <form action="{{ route('loginpost') }}" class="contact-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Tên Đăng Nhập</label>
                                <input class="form-control" name="username" type="text" placeholder="Số điện thoại hoặc Email">
                                @if ($errors->has('username'))
                                   {{ $errors->first('username') }}
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <label>Mật Khẩu</label>
                                <input class="form-control" name="Password" type="password" placeholder="Mật Khẩu">
                                @error('Password')
                                    {{ $message }}
                                @enderror
                            </div>
                            {{-- <div class="col-lg-12">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="remember" id="remember" type="checkbox"><span class="custom-control-label">Remember Me</span>
                                </label>
                            </div> --}}
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit"><span>Đăng Nhập</span></button>
                                <a class="btn btn-secondary" href="{{ route('register') }}">Đăng Ký</a>
                            </div>
                            <div class="col-lg-12">
                                @if (session()->has('massage'))
                                    <span>{{ session('massage') }}</span>
                                @endif
                            </div>

                            <!-- <div class="col-lg-12">
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit">Submit Now</button>
                            </div> -->

                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.063756558014!2d106.62815801526047!3d10.806428961593074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752958610bf1e9%3A0x7f5c1379aaabb441!2zMTggTmd1eeG7hW4gU8OhbmcsIFTDonkgVGjhuqFuaCwgVMOibiBQaMO6LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sbd!4v1604373012788!5m2!1sen!2sbd" height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
