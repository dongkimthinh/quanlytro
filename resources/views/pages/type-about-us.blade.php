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
                            <h2>{{ $gioithieu->tieude }}.</h2>
                            <p>{{ $gioithieu->noidung }}.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">Địa Chỉ
                            <li><i class="icon_check"></i> {{ $gioithieu->diachi }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @php
                $values = explode(",",$gioithieu->anh)
            @endphp
            <div class="about-page-services">
                <div class="row">
                    @foreach($values as $key)
                        <div class="col-md-4">
                            <div class="ap-service-item set-bg" data-setbg="{{ asset('public/img/about/'.$key) }}">
                                <div class="api-text">
                                    <h3>{{ $gioithieu->diachi }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{ asset('public/img/about/about-p2.jpg') }}">
                            <div class="api-text">
                                <h3>Travel & Camping</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{ asset('public/img/about/about-p3.jpg') }}">
                            <div class="api-text">
                                <h3>Event & Party</h3>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->
    <!-- Video Section Begin -->
    <section class="video-section set-bg" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text" style="padding-top: 0px;height: 500px;">
                        <?php echo html_entity_decode($gioithieu->map); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
    <br>
    <br>
    <br>
    <!-- Gallery Section Begin -->
    {{--  <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Gallery</span>
                        <h2>Discover Our Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-1.jpg') }}">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-3.jpg') }}">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-4.jpg') }}">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item large-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-2.jpg') }}">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
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
            @php
                $khungcanhdiachi = DB::table('khungcanhvaanhnoibat')->where('id_dc',request()->route('id'))->join('gioithieu','khungcanhvaanhnoibat.id_dc','=','gioithieu.id')->select('khungcanhvaanhnoibat.anhkhungcanhdiachitheoloai')->first();

                $arr = explode(",",$khungcanhdiachi->anhkhungcanhdiachitheoloai);
                $kt = 0;
            @endphp
            <div class="row">
                @for ($i = 0; $i < count($arr); $i++)
                    @if($kt==$i)
                        <div class="col-lg-6">
                            <div class="gallery-item set-bg" data-setbg="{{ asset('public/khungcanhvaanhnoibat/'.$arr[$i]) }}">
                                <div class="gi-text">
                                    <h3>Phòng Cao Cấp</h3>
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                            @if($i==count($arr)-1)
                                @break
                            @endif
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="gallery-item set-bg" data-setbg="{{ asset('public/khungcanhvaanhnoibat/'.$arr[$i]) }}">
                                        <div class="gi-text">
                                            <h3>Phòng Chuẩn</h3>
                                        </div>
                                    </div>
                                </div>
                                @if($i==count($arr)-1)
                                    @break
                                @endif
                                @php
                                    $i++;
                                @endphp

                                <div class="col-sm-6">
                                    <div class="gallery-item set-bg" data-setbg="{{ asset('public/khungcanhvaanhnoibat/'.$arr[$i]) }}">
                                        <div class="gi-text">
                                            <h3>Phòng Trung</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($i==count($arr)-1)
                            @break
                        @endif
                        @php
                            $kt = $i;
                            $i++;
                        @endphp
                    @endif
                    <div class="col-lg-6">
                        <div class="gallery-item large-item set-bg" data-setbg="{{ asset('public/khungcanhvaanhnoibat/'.$arr[$i]) }}">
                            <div class="gi-text">
                                <h3>Phòng Thường</h3>
                            </div>
                        </div>
                    </div>
                    @php
                        $kt=$i+1;
                    @endphp
                    @if($i==count($arr)-1)
                        @break
                    @endif
                @endfor
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->
@endsection
