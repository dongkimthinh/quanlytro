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
                        <form action="{{ route('loginpost') }}" class="contact-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Tên Đăng Nhập</label>
                                    <input class="form-control" name="username" type="text"
                                        placeholder="Số điện thoại hoặc Email">
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
                                        <input class="custom-control-input" name="remember" id="remember"
                                            type="checkbox"><span class="custom-control-label">Remember Me</span>
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
                                <br>
                                <div class="col-lg-12">
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="padding: 15px 20px;">Quên Mật
                                        Khẩu?</a>
                                </div>
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
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="">Quên Mật Khẩu?</h4>
            </div>
                <div class="modal-body">
                <p>Vui lòng cung cấp email hoặc số điện thoại đăng nhập để lấy lại mật khẩu.</p>
                <form id="demoForm1" action="" method="post">
                    @csrf
                <input id="email1" name="email" class="form-control">
                </form>
                <div id="mess1" style="color: red"></div>

                </div>
                <div class="modal-footer">
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                <button id="quenmatkhau1" class="btn btn-primary">Gửi</button>
                </div>

          </div>
        </div>
    </div>
    <!-- Contact Section End -->
@endsection
