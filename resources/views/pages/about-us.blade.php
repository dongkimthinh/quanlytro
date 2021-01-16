@extends('masterpage')
@section('title')
    About-Us
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Giới Thiệu</h2>
                        <div class="bt-option">
                            <a href="{{ URL::to('/index') }}">Trang Chủ</a>
                            <span>Giới Thiệu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>CHÀO MỪNG QUÝ KHÁCH HÀNG ĐẾN VỚI DỊCH VỤ PHÒNG TRỌ CỦA CHÚNG TÔI</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            @foreach($gioithieu as $key)
                            <li><i class="icon_check"></i> {{ $key->diachi }}.</li>
                            {{-- <li><i class="icon_check"></i> Tận tâm</li> --}}
                            {{-- <li><i class="icon_check"></i> 3 Pcs Laundry Per Day</li> --}}
                            {{-- <li><i class="icon_check"></i> Miễn phí Wifi.</li> --}}
                            {{-- <li><i class="icon_check"></i> Discount 20% On F&B</li> --}}
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{ asset('public/slide/test2.jpg') }}">
                            <div class="api-text">
                                <h3>18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú, TP.HCM</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{ asset('public/slide/IMG_0019.JPG') }}">
                            <div class="api-text">
                                <h3>31 Cống Lỡ,P.15,Q.Gò Vấp, TP.HCM</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{ asset('public/slide/IMG_0024.JPG') }}">
                            <div class="api-text">
                                <h3>17B Tân Trụ, P.15, Quận Tân Bình, TP.HCM</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->
    <!-- Video Section Begin -->
    {{-- <section class="video-section set-bg" data-setbg="{{ asset('public/img/video-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Khám phá Khách sạn & Dịch vụ của Chúng tôi.</h2>
                        {{-- <p>It S Hurricane Season But We Are Visiting Hilton Head Island</p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="{{ asset('public/img/play.png') }}" alt=""></a> --}}
                    {{-- </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Video Section End -->


    <section class="video-section set-bg" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text" style="padding-top: 0px;">
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.063756558014!2d106.62815801526047!3d10.806428961593074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752958610bf1e9%3A0x7f5c1379aaabb441!2zMTggTmd1eeG7hW4gU8OhbmcsIFTDonkgVGjhuqFuaCwgVMOibiBQaMO6LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sbd!4v1604373012788!5m2!1sen!2sbd" width="100%" height="500" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="dc2">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.8070176661618!2d106.6309396143273!3d10.826075661236784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292460db017b%3A0x60b93c87c6865dc!2zMzEgQ-G7kW5nIEzhu6EsIFBoxrDhu51uZyAxNSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610710590730!5m2!1svi!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="dc3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.825841773909!2d106.6289571143273!3d10.824636361263074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752962c47ef0c5%3A0xea9ad52ac9dc408!2zMTdiIFTDom4gVHLhu6UsIFBoxrDhu51uZyAxNSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610710636121!5m2!1svi!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Phòng trưng bày của chúng tôi</span>
                        <h2>Khung Cảnh</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-item set-bg" data-setbg="{{ asset('public/hinhtro/95f81869ce433f1d6652.jpg') }}">
                        <div class="gi-text">
                            <h3>Phòng Cao Cấp</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{ asset('public/hinhtro/96a85235841f75412c0e.jpg') }}">
                                <div class="gi-text">
                                    <h3>Phòng Chuẩn</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{ asset('public/hinhtro/d9bc552f8305725b2b14.jpg') }}">
                                <div class="gi-text">
                                    <h3>Phòng Trung</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item large-item set-bg" data-setbg="{{ asset('public/hinhtro/d9bc552f8305725b2b14.jpg') }}">
                        <div class="gi-text">
                            <h3>Phòng Thường</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->
@endsection
