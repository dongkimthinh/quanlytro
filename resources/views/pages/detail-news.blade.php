@extends('masterpage')
@section('title')
    Detail News
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Tin Tức</h2>
                        <div class="bt-option">
                            <a href="{{ URL::to('/index') }}">Trang Chủ</a>
                            <span>Tin Tức</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <section class="section single-wrapper">
            <div class="container custom-container-news">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">

                            <div class="blog-title-area text-center">

                                <h3>{{ $news->tieude }}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html" title="">{{ $news->ngaydang }}</a></small>
                                    <small><a href="tech-author.html" title="">by admin</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        {{-- <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li> --}}
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            @php
                                $anh = $news->hinh_anh_tin;
                            @endphp
                            <div class="single-post-media">
                                <img src="{{ asset('public/img/blog/'.$anh) }}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">
                                <div class="pp">
                                    <p style="font-weight:bolder;">{{ $news->noidung_tt }}<p>
                                </div><!-- end pp -->

                                <img src="upload/tech_menu_09.jpg" alt="" class="img-fluid img-fullwidth">

                                <div class="pp">
                                    @php
                                        $nd=$news->noidung;
                                        echo html_entity_decode($nd);
                                    @endphp
                                </div><!-- end pp -->
                            </div><!-- end content -->

                            <div class="blog-title-area">
                                <!-- <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    <small><a href="#" title="">lifestyle</a></small>
                                    <small><a href="#" title="">colorful</a></small>
                                    <small><a href="#" title="">trending</a></small>
                                    <small><a href="#" title="">another tag</a></small>
                                </div>end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        {{-- <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li> --}}
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row --> --}}

                            <hr class="invis1">



                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="{{ asset('public/hinh/qc.jpg') }}" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>




@endsection
