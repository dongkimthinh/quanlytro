<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="mx-3 sidebar-brand-text">Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="my-0 sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Interface
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    {{--  <li class="nav-item">
        <a class="nav-link" href="{{ route('charts') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>  --}}

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities8"
        aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fab fa-adversal"></i>
            <span>Quản Lý</span>
        </a>
        <div id="collapseUtilities8" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('lienhe') }}">Thông Tin Quản Lý</a>
            </div>
        </div>
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-procedures"></i>
            <span>Phòng</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('roomadmin') }}">Danh sách phòng</a>
                <a class="collapse-item" href="{{ route('typeroomsadmin') }}">Loại phòng</a>
                {{-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities1"
        aria-expanded="true" aria-controls="collapseUtilities1">
            <i class="fas fa-address-book"></i>
            <span>Tài Khoản</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('khachhangadmin') }}">Danh sách Tài Khoản</a>

                {{-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities2"
        aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-cubes"></i>
            <span>Thiết bi</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('thietbi') }}">Thiết bị</a>

                {{-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities3"
        aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-cannabis"></i>
            <span>Hiệu ứng</span>
        </a>
        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('hieuung') }}">Hiệu ứng</a>

                {{-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities4"
        aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fab fa-slideshare"></i>
            <span>Slide</span>
        </a>
        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('slide') }}">Slide</a>

                {{-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities5"
        aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-concierge-bell"></i>
            <span>Dịch Vụ</span>
        </a>
        <div id="collapseUtilities5" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('dichvuchung') }}">Dịch Vụ Chung</a>
                {{-- <a class="collapse-item" href="{{ route('coupon') }}">Mã Giảm Giá</a> --}}
                <a class="collapse-item" href="{{ route('gioithieuadmin') }}">Giới Thiệu</a>
                {{-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities6"
        aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-file-signature"></i>
            <span>Đơn Hàng</span>
        </a>
        <div id="collapseUtilities6" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('orders') }}">Đơn Hàng</a>
                {{--  <a class="collapse-item" href="{{ route('coupon') }}">Mã Giảm Giá</a>  --}}
                {{-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUtilities7"
        aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-file-signature"></i>
            <span>Tin Tức</span>
        </a>
        <div id="collapseUtilities7" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Tùy chỉnh:</h6>
                <a class="collapse-item" href="{{ route('postNews') }}">Đăng tin</a>
                <a class="collapse-item" href="{{ route('newsAdmin') }}">Quản lý tin</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card">
        <img class="mb-2 sidebar-card-illustration" src="{{ asset('public/admin/img/undraw_rocket.svg') }}" alt="">
        <p class="mb-2 text-center"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
