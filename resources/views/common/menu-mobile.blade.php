<!-- Header Section Begin -->
<header class="header-section-mobile">
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 custom-header-logo">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('public/img/logohachinhmenu.jpg') }}" style="width: 86px;height: 50px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 custom-header-menu">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <!-- <li><a href="{{ route('index') }}">Trang Chủ</a></li> -->

                                <li><a>Loại Phòng</a>
                                    <ul class="dropdown ct-tr">
                                        @foreach ($loai_sp as $loai)
                                            <li id="load-du-lieu" class="ct-tr"><a
                                                    href="{{ route('type-rooms', $loai->id_loai_phong) }}">{{ $loai->ten_loai_phong }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a>Giới thiệu</a>
                                    <ul class="dropdown ct-gt">
                                        @foreach ($gioithieu as $gt)
                                            <li id="load-du-lieu" class="ct-gt"><a
                                                    href="{{ route('type-about-us',$gt->id) }}">{{ $gt->diachi }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ URL::to('/news') }}">Tin Tức</a></li>

                                <li><a href="{{ URL::to('/contact') }}">Liên Hệ</a></li>

                                    <!-- <button class="btn btn-primary custom-btn-book" onclick="showOrHideDiv()">Đặt ngay</button> -->

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
                                    <nav class="mainmenu" id="mainmenu" style="float: unset;background-color:#dfa974;border-radius:10px">
                                        <ul id="cap0" style="list-style: none">
                                            <li id="cap1" style="list-style: none">

                                                <div class="bk-btn" id="bk-btn">
                                                <a href="{{ route('cart') }}" id="cart" id="load">
                                                        <label class="custom-count" style="font-size:9px;" style="float:right">
                                                            <div style="font-size:12px" class="custom-hidden">Giỏ hàng</div>
                                                            @if (session()->has('cart'))
                                                                <div id="load_sl2" style="float: left">
                                                                    {{ $tongsoluong }}
                                                                </div><span class="custom-hidden">-Sản Phẩm</span>
                                                            @else
                                                                <div id="load_sl2" style="float: left">
                                                                    @php
                                                                    echo '0'
                                                                    @endphp
                                                                </div><span class="custom-hidden">-Sản Phẩm</span>
                                                            @endif

                                                        </label>
                                                        <img class="custom-img-cart" src="{{ asset('public/img/about/cart.png') }}"
                                                            style="zoom:4%;">
                                                            <script>
                                                                // Firefox 1.0+
                                                                var isFirefox = typeof InstallTrigger !== 'undefined';
                                                                if(isFirefox==true)
                                                                {
                                                                    document.write('<style>.custom-img-cart{margin:unset;padding:unset;}</style>');
                                                                }
                                                                else{
                                                                    document.write('<style>.custom-img-cart{padding-bottom: 300px;}</style>');
                                                                }
                                                            </script>
                                                            </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>

                            </ul>
                        </nav>

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
