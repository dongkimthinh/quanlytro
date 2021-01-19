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
                                @php
                                $stt = 0;
                                @endphp
                                @foreach ($lienhe as $key => $value)
                                    <tr>
                                        @for ($i = 0; $i < count($lienhe); $i++)
                                            <td class="c-o">Chi Nhánh {{ $stt = $stt + 1 }}:</td>
                                            @break
                                        @endfor
                                        <td>{{ $value->diachi }}</td>
                                    </tr>

                                @endforeach
                                @foreach ($quanly as $key => $value)
                                    @php
                                    $phone = str_replace(" ", "", $value->sdt);
                                    if(strlen($phone)==10){
                                    $kq = substr($phone, 0, 4) . " " . substr($phone, 4, 3) . " " . substr($phone, 7, 3);
                                    } else{
                                    $kq = substr($phone, 0, 4) . " " . substr($phone, 4, 4) . " " . substr($phone, 8, 3);
                                    }
                                    @endphp
                                    <tr>
                                        <td class="c-o">ĐT:</td>
                                        <td>{{ $kq }}({{ $value->ten }})</td>
                                    </tr>
                                @endforeach
                                @foreach ($quanly as $key => $value)

                                    <tr>
                                        <td class="c-o">Email:</td>
                                        <td>{{ $value->email }}</td>
                                    </tr>
                                @endforeach
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
                                <label>Tên Tài Khoản</label>
                                <input class="
                                form-control
                               " name="username" type="text" placeholder="Tên tài khoản">
                                @error('username')
                                   {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Địa Chỉ Email</label>
                                <input class="form-control" name="email" type="email" placeholder="Địa chỉ email">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Mật Khẩu</label>
                                <input class="form-control" name="password" type="password" placeholder="Mật khẩu">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Giới Tính</label>
                                <select class="form-control" id="guest"  name="gioitinh" style="color:#aaaac4 !important;padding:6px 12px 6px 25px;margin: 0px 0px 28px">
                                    <option value="" disabled selected>Giới tính</option>
                                    <option value="Nam" style="width: auto;" data-width="100%">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                                <div class="col-lg-12" style="padding: 0px 0px 0px 0px">
                                    @error('gioitinh')
                                    {{ $message }}
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Nhập Lại Mật Khẩu</label>
                                <input class="form-control" name="nhaplaimatkhau" type="password"
                                    placeholder="Nhập lại mật khẩu">
                                    @error('nhaplaimatkhau')
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
                                <label>Số Điện Thoại</label>
                                <input class="form-control" name="sdt" type="tel" placeholder="Số điện thoại">
                                @error('sdt')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label>Họ Và Tên</label>
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
                <ul class="nav nav-tabs" role="tablist">
                    @for ($i = count($lienhe) - 1; $i >= 0; $i--)
                        <li role="presentation" class="{{ $i == count($lienhe) - 1 ? 'active' : '' }}">
                            <a href="#dc{{ $i }}" aria-controls="home" role="tab"
                                data-toggle="tab">{{ $lienhe[$i]->diachi }}</a>
                        </li>
                    @endfor
                    {{-- <li role="presentation"><a href="#dc2" aria-controls="messages"
                            role="tab" data-toggle="tab">31 Cống Lỡ, Phường 15, Quận Gò Vấp, TP.HCM</a>
                    </li>
                    <li role="presentation"><a href="#dc3" aria-controls="settings" role="tab" data-toggle="tab">17B Tân
                            Trụ, Phường 15, Quận Tân Bình, TP.HCM</a>
                    </li> --}}
                </ul>
                <div class="tab-content" style="height: 100%">
                    @for ($i = count($lienhe) - 1; $i >= 0; $i--)
                        <div role="tabpanel" style="height: 100%" class="tab-pane {{ $i == count($lienhe) - 1 ? 'active' : '' }}"
                            id="dc{{ $i }}">
                            <?php echo html_entity_decode($lienhe[$i]->map); ?>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
