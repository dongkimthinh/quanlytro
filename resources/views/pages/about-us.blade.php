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
    <section class="video-section set-bg" data-setbg="{{ asset('public/img/video-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Khám phá Khách sạn & Dịch vụ của Chúng tôi.</h2>
                        {{-- <p>It S Hurricane Season But We Are Visiting Hilton Head Island</p> --}}
                        {{-- <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="{{ asset('public/img/play.png') }}" alt=""></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

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
