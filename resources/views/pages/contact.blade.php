@extends('masterpage')
@section('title')
    Contact
@endsection
@section('content')
<!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container custom-container-logincart">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Thông tin liên hệ</h2>

                        <table>
                            <tbody>
                                @php
                                    $stt = 0;
                                @endphp
                                @foreach($lienhe as $key => $value)
                                        <tr>
                                            @for($i = 0; $i < count($lienhe); $i++)
                                            <td class="c-o">Chi Nhánh {{ $stt=$stt+1 }}:</td>
                                            @break
                                            @endfor
                                            <td>{{ $value->diachi }}</td>
                                        </tr>

                                @endforeach
                                {{--  <tr>
                                    <td class="c-o">Địa chỉ 2:</td>
                                    <td>31 Cống Lỡ, Phường 15, Quận Gò Vấp, TP.HCM</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Địa chỉ 3:</td>
                                    <td>17B Tân Trụ, Phường 15, Quận Tân Bình, TP.HCM</td>
                                </tr>  --}}
                                <tr>
                                    <td class="c-o">HostLine:</td>
                                    <td>0703 150 380 (Mr.Thịnh)</td>
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
                    <form action="{{ route('contractpost') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Tên</label>
                                <input class="form-control" name="ten" type="text" placeholder="Tên">
                                @error('ten')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>Email</label>
                                <input class="form-control" name="email" type="text" placeholder="Email">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label>Số Điện Thoại</label>
                                <input class="form-control" name="sdt" type="text" placeholder="SDT">
                                @error('sdt')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label>Nội dung</label>
                                <textarea placeholder="Nội dung" name="noidung"></textarea>
                                @error('noidung')
                                    <span class="error">{{ $message }}</span><br><br>
                                @enderror
                                <button class="btn btn-primary" type="submit">Gửi</button>
                            </div>
                            @if (session('message'))
                            <div class="col-lg-12">
                                <br>
                                <h6 class="m-0 font-weight-bold text-primary">{{ session('message') }}</h6>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="map">
                <section>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a
                                    href="#dc1" aria-controls="home" role="tab"
                                    data-toggle="tab">18 Nguyễn Sáng,Phường Tây Thạnh,Quận Tân Phú, TP.HCM</a></li>
                        <li role="presentation"><a href="#dc2" aria-controls="messages" role="tab" data-toggle="tab">31 Cống Lỡ, Phường 15, Quận Gò Vấp, TP.HCM</a>
                        </li>
                        <li role="presentation"><a href="#dc3" aria-controls="settings" role="tab" data-toggle="tab">17B Tân Trụ, Phường 15, Quận Tân Bình, TP.HCM</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="dc1">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.063756558014!2d106.62815801526047!3d10.806428961593074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752958610bf1e9%3A0x7f5c1379aaabb441!2zMTggTmd1eeG7hW4gU8OhbmcsIFTDonkgVGjhuqFuaCwgVMOibiBQaMO6LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sbd!4v1604373012788!5m2!1sen!2sbd" height="470" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="dc2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.8070176661618!2d106.6309396143273!3d10.826075661236784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292460db017b%3A0x60b93c87c6865dc!2zMzEgQ-G7kW5nIEzhu6EsIFBoxrDhu51uZyAxNSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610710590730!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="dc3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.825841773909!2d106.6289571143273!3d10.824636361263074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752962c47ef0c5%3A0xea9ad52ac9dc408!2zMTdiIFTDom4gVHLhu6UsIFBoxrDhu51uZyAxNSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610710636121!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
