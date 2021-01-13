<!-- Header Section Begin -->
<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
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
                            <i class="fa fa-user"></i> Số người online:<span id="online">{{ count($count) }}</span>
                        </li>
                        {{-- <li>
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn">Chọn địa chỉ</button>
                                <div id="myDropdown" class="dropdown-content">
                                    @foreach($gioithieu as $key)
                                        <a class="diachi" id="diachi{{ $key->id }}" value="{{ $key->diachi }}" style="width: 450px">{{ $key->diachi }}</a>
                                    @endforeach

                                </div>
                            </div>
                            <div id="setdiachi" style="display: none">@if(session()->has('diachi')){{ session()->get('diachi') }}@endif</div>
                            {{--  ,  --}}
                            {{--  <select  class="mul-select"  multiple="true" style="width: 100%">
                                @for ($i = 0; $i < count($gioithieu); $i++)
                                    <option value="{{ $gioithieu[$i]->diachi }}">{{ $gioithieu[$i]->diachi }}</option>
                                @endfor
                            </select>  --}}
                        {{-- </li> --}}
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right pull-right">
                        <div class="top-social" style="float: left;padding:13px 0px 11px">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        {{-- @php
                        $soluong = 0;
                        @endphp --}}
                        {{-- @php
                        $total = 0;
                        @endphp
                        @if (session()->has('cart'))
                            @foreach (session()->get('cart') as $cart)
                                @php
                                $subtotal = ($cart["product_gia"]*$cart["product_qty"]);
                                $total = ($total + $subtotal);
                                @endphp
                            @endforeach
                        @endif --}}
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
                        <nav class="mainmenu" id="mainmenu" style="float: left;height: 56.48px;">
                            <ul id="cap0" style="list-style: none">
                                <li id="cap1" style="list-style: none">
                                    <div class="bk-btn" id="bk-btn">
                                        <a href="{{ route('cart') }}" id="cart" id="load">
                                            <label style="font-size:9px;" style="float:right">
                                                <div style="font-size:12px">Giỏ hàng</div>
                                                @if (session()->has('cart'))
                                                    <div id="load_sl" style="float: left">
                                                        {{ $tongsoluong }}
                                                    </div>-Sản Phẩm
                                                @else
                                                    <div id="load_sl" style="float: left">
                                                        @php
                                                        echo '0'
                                                        @endphp
                                                    </div>-Sản Phẩm
                                                @endif

                                            </label>
                                            <img src="{{ asset('public/img/about/cart.png') }}"
                                                style="zoom:5%;padding-bottom: 300px">
                                        </a>
                                    </div>
                                    {{-- <ul id="bat">
                                        <div id="load_inf">
                                        @if (session()->has('cart'))
                                            @foreach (session()->get('cart') as $key => $cart)
                                                {{-- <input hidden id="product_id"
                                                    value="{{ $cart['product_id'] }}"> --}}
                                                {{-- <li style="float: left">
                                                    <ul>
                                                        <li style="list-style: none;" id="product_loai">
                                                            {{ $cart['product_loai'] }}
                                                        </li>
                                                        <li style="list-style: none;" id="product_qty">Số Lượng
                                                            Phòng:{{ $cart['product_qty'] }}</li>
                                                        {{-- <li style="list-style: none;">
                                                            {{ number_format($cart['product_gia'],0,',','.') }}VND
                                                        </li> --}}
                                                    {{-- </ul>
                                                </li>
                                                <li style="list-style: none;float: left;padding:5px;" id="load">
                                                    <img src="{{ asset('public/hinhtro/'.$cart['product_image']) }}"style="height:55px;width:65px;">
                                                    <a href="#"><i class="fas fa-backspace"></i></a>
                                                </li>
                                            @endforeach
                                                <li class="text-center"><a href="{{ route('cart') }}" class="btn btn-primary"><i
                                                        class="fas fa-eye"></i> Xem giỏ hàng</a></li>
                                        @endif
                                        </div>
                                    </ul> --}}
                                </li>
                            </ul>
                        </nav>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('public/img/logo1.gif') }}" style="width: 86px;height: 50px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li><a href="{{ route('index') }}">Trang Chủ</a></li>


                                <li><a href="">Loại Phòng</a>
                                    <ul class="dropdown ct-tr">
                                        {{-- <li><a href="{{ route('type-rooms') }}">Vip
                                                1</a></li>
                                        <li><a href="{{ route('type-rooms') }}">Vip 2</a></li>
                                        <li><a href="{{ route('type-rooms') }}">Vip 3</a></li>
                                        --}}
                                        {{-- <li><a href="#">Premium Room</a></li>
                                        --}}
                                        @foreach ($loai_sp as $loai)
                                            <li style="width: 150px;" id="load-du-lieu"><a
                                                    href="{{ route('type-rooms', $loai->id_loai_phong) }}">{{ $loai->ten_loai_phong }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a href="{{ URL::to('/about-us') }}">Giới thiệu</a>
                                    <ul class="dropdown ct-gt">
                                        {{-- <li><a href="{{ route('type-rooms') }}">Vip
                                                1</a></li>
                                        <li><a href="{{ route('type-rooms') }}">Vip 2</a></li>
                                        <li><a href="{{ route('type-rooms') }}">Vip 3</a></li>
                                        --}}
                                        {{-- <li><a href="#">Premium Room</a></li>
                                        --}}
                                        @foreach ($gioithieu as $gt)
                                            <li style="width: 300px;" id="load-du-lieu"><a
                                                    href="{{ route('type-about-us',$gt->id) }}">{{ $gt->diachi }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ URL::to('/news') }}">Tin Tức</a></li>

                                <li><a href="{{ URL::to('/contact') }}">Liên Hệ</a></li>
                                {{-- <li><i class="icon_search"></i></li>
                                --}}
                                <li>
                                    {{-- <form @method('post') <input class=""
                                        name="search" id="search" type="text" placeholder="Tìm kiếm">
                                        <button class="btn btn-primary"><span><i class="fas fa-search"
                                                    aria-hidden="true" style="padding-bottom: 2px"></i></span></button>
                                    </form> --}}
                                    {{-- <a class="btn btn-primary">Đặt ngay</a>
                                    --}}
                                    {{-- <input type='button' id='hideshow'
                                        value='hide/show' class="btn btn-primary multi-select isselected" id="id">Đặt
                                    ngay</input> --}}
                                    <button class="btn btn-primary" onclick="showOrHideDiv()">Đặt ngay</button>
                                </li>
                            </ul>
                        </nav>
                        {{-- <div class="nav-right search-switch">



                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    function showOrHideDiv() {
        var v = document.getElementById("showOrHide");
        if (v.style.display === "none") {
            v.style.display = "block";
        } else {
            v.style.display = "none";
        }
    }

</script>
<!-- Header End -->
