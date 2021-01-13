@extends('masterpage')
@section('title')
    News
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Tin Tức</h2>
                        <!-- <div class="bt-option">
                            <a href="{{ URL::to('/index') }}">Trang Chủ</a>
                            <span>Tin Tức</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- <textarea name="editor1"></textarea>
    <script>
            CKEDITOR.replace( 'editor1' );
    </script> -->

    <section class="section">
            <div class="container custom-container-news">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <!-- <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4> -->
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                            @foreach( $news as $tt )
                            @php
                                $anh = $tt->hinh_anh_tin;
                                $id = $tt->id_tin;
                            @endphp
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ route('detailNews',$tt->id_tin) }}" title="">
                                                <img src="{{ asset('public/img/blog/'.$anh) }}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a class="custom-title" href="{{ route('detailNews',$tt->id_tin) }}" title="">{{ $tt->tieude }}</a></h4>
                                        <p>{{ $tt->noidung_tt }}</p>
                                        <!-- <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small> -->
                                        <small><a class="bg-orange" href="tech-single.html" title="">{{ $tt->ngaydang }}</a></small>
                                        <small><a href="tech-author.html" title="">by admin</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                            @endforeach
                            </div>
                        </div>


                        {{-- <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row --> --}}
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar custom-sticky">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="{{ asset('public/hinh/banner_07.jpg') }}" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->


                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
