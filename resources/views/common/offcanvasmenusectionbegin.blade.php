<div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon search-switch">
            <div class="col-lg-6">
                <ul class="tn-left" style="list-style: none">
                    <!-- <li><i class="fa fa-phone"></i> (12) 345 67890</li> -->
                    @if (!Auth::guard('taikhoan')->check())
                        <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> <a
                                href="{{ route('login') }}">Đăng Nhập / Đăng Ký</a>
                        </li>
                    @endif
                    @if (Auth::guard('taikhoan')->check())
                        <li>
                            <i class="fa fa-user"></i> Xin chào: {{ $tenkh->tenkh }}
                        </li>
                        <li>
                            <i class="fa fa-sign-out"></i>
                            <a href="{{ route('logout') }}">Đăng xuất</a>
                        </li>
                    @endif
                    <li>
                        <i class="fa fa-user"></i> Số người online:<span id="online1">{{ count($count) }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-configure-area">
            {{-- <div class="language-option">
                <img src="{{ asset('public/img/flag.jpg') }}" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div> --}}

                {{--  ,  --}}
                {{--  <select  class="mul-select"  multiple="true" style="width: 100%">
                    @for ($i = 0; $i < count($gioithieu); $i++)
                        <option value="{{ $gioithieu[$i]->diachi }}">{{ $gioithieu[$i]->diachi }}</option>
                    @endfor
                </select>  --}}

            @php
                $tongsoluong = 0;
            @endphp
            @if (session()->has('cart'))
                @foreach (session()->get('cart') as $key => $cart)
                    @php
                        $soluong =$cart['product_qty'];
                        $tongsoluong += $soluong;
                    @endphp
                @endforeach
            @endif
            <div class="bk-btn">
                <a href="{{ route('cart') }}" id="cart" id="load">
                    <label style="font-size:9px;" style="float:right">
                        <div style="font-size:12px">Giỏ hàng</div>
                        @if (session()->has('cart'))
                            <div id="load_sl1" style="float: left">
                                {{ $tongsoluong }}
                            </div>-Sản Phẩm
                        @else
                            <div id="load_sl1" style="float: left">
                                @php
                                echo '0'
                                @endphp
                            </div>-Sản Phẩm
                        @endif

                    </label>
                    <img class="custom-img-cart-off" src="{{ asset('public/img/about/cart.png') }}"
                        style="zoom:5%;">
                        <script>
                            // Firefox 1.0+
                            var isFirefox = typeof InstallTrigger !== 'undefined';
                            if(isFirefox==true)
                            {
                                document.write('<style>.custom-img-cart-off{margin:unset;padding:unset;width:50px}</style>');
                            }
                            else{
                                document.write('<style>.custom-img-cart-off{padding-bottom: 300px;}</style>');
                            }
                        </script>
                </a>
            </div>

        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('index') }}">Trang Chủ</a></li>
                {{-- <li><a href="{{ route('rooms') }}">Rooms</a></li> --}}
                {{-- <li><a href="{{ route('about-us') }}">About Us</a></li> --}}
                <li>Loại Phòng
                    <ul class="dropdown">
                        @foreach ($loai_sp as $loai)
                        <li><a href="{{ route('type-rooms', $loai->id_loai_phong) }}">{{ $loai->ten_loai_phong }}</a></li>
                        {{-- <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li> --}}
                        @endforeach
                    </ul>
                                            {{-- <li style="width: 190px;" id="load-du-lieu"><a
                                                    href="{{ route('type-rooms', $loai->id_loai_phong) }}"></a>
                                            </li> --}}
                </li>
                <li>Giới thiệu
                    <ul class="dropdown">
                        {{-- <li><a href="{{ route('type-rooms') }}">Vip
                                1</a></li>
                        <li><a href="{{ route('type-rooms') }}">Vip 2</a></li>
                        <li><a href="{{ route('type-rooms') }}">Vip 3</a></li>
                        --}}
                        {{-- <li><a href="#">Premium Room</a></li>
                        --}}
                        @foreach ($gioithieu as $gt)
                            <li style="width: 350px;" id="load-du-lieu"><a
                                    href="{{ route('type-about-us',$gt->id) }}">{{ $gt->diachi }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ URL::to('/news') }}">Tin Tức</a></li>
                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 0703 150 380</li>
            <li><i class="fa fa-envelope"></i> dongkimthinh123@gmail.com</li>
        </ul>
    </div>
