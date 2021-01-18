<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Trọ | @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ asset('public/img/logohachinhmenu.jpg') }}">
    <!-- Css Styles -->

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/slicknav.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/sweetalert.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('public/css/sanh.css') }}" type="text/css">

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <style type="text/css">
        .snow-container {
            position: fixed;
            width: 100%;
            max-width: 100%;
            z-index: 99999;
            pointer-events: none;
            overflow: hidden;
            top: 0;
            height: 100%
        }

        .snow {
            display: block;
            position: absolute;
            z-index: 2;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            pointer-events: none;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            -webkit-animation: snow linear infinite;
            animation: snow linear infinite
        }

        .snow.foreground {
            background-image: url("https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-large-075d267ecbc42e3564c8ed43516dd557.png");
            -webkit-animation-duration: 15s;
            animation-duration: 10s
        }

        .snow.foreground.layered {
            -webkit-animation-delay: 7.5s;
            animation-delay: 7.5s
        }

        .snow.middleground {
            background-image: url(https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-medium-0b8a5e0732315b68e1f54185be7a1ad9.png);
            -webkit-animation-duration: 20s;
            animation-duration: 15s
        }

        .snow.middleground.layered {
            -webkit-animation-delay: 10s;
            animation-delay: 10s
        }

        .snow.background {
            background-image: url(https://dl6rt3mwcjzxg.cloudfront.net/assets/snow/snow-small-1ecd03b1fce08c24e064ff8c0a72c519.png);
            -webkit-animation-duration: 25s;
            animation-duration: 20s
        }

        .snow.background.layered {
            -webkit-animation-delay: 12.5s;
            animation-delay: 12.5s
        }

        @-webkit-keyframes snow {
            0% {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }

            100% {
                -webkit-transform: translate3d(5%, 100%, 0);
                transform: translate3d(5%, 100%, 0)
            }
        }

        @keyframes snow {
            0% {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }

            100% {
                -webkit-transform: translate3d(5%, 100%, 0);
                transform: translate3d(5%, 100%, 0)
            }
        }

    </style>
    <style>
        .october-leaf {
            position: absolute;
            background-color: transparent;
            background-image: url('leaves.png');
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            transform: translateZ(0);
        }

    </style>

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>

<body>

    <script language="JavaScript1.2">
        <!-- Begin
        // written by Matthew Musgrove
        // muskrat@lvnworth.com
        var no = 50;
        var speed = 1;
        var ns4up = (document.layers) ? 1 : 0;
        var ie4up = (document.all) ? 1 : 0;
        var s, x, y, sn, cs;
        var a, r, cx, cy;
        var i, doc_width = 800, doc_height = 600;
        if (ns4up) {
            doc_width = self.innerWidth;
            doc_height = self.innerHeight;
        }
        else if (ie4up) {
            doc_width = document.body.clientWidth;
            doc_height = document.body.clientHeight;
        }
        x = new Array();
        y = new Array();
        r = new Array();
        cx = new Array();
        cy = new Array();
        s = 8;

        for (i = 0; i < no; ++ i) {
            initRain();
            if (ns4up) {
                if (i == 0) {
                    document.write("<layer name=\"dot"+ i +"\" left=\"1\" ");
                    document.write("top=\"1\" visibility=\"show\">");
                    document.write(",</layer>");
                }
                else {
                    document.write("<layer name=\"dot"+ i +"\" left=\"1\" ");
                    document.write("top=\"1\" visibility=\"show\">");
                    document.write(",</layer>");
               }
            }
            else if (ie4up) {
                if (i == 0) {
                    document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
                    document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
                    document.write("visible; TOP: 15px; LEFT: 15px;\">");
                    document.write(",</div>");
                }
                else {
                    document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
                    document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
                    document.write("visible; TOP: 15px; LEFT: 15px;\">");
                    document.write(",</div>");
                }
            }
        }
        function initRain() {
            a = 6;
            r[i] = 1;
            sn = Math.sin(a);
            cs = Math.cos(a);
            cx[i] = Math.random() * doc_width + 1;
            cy[i] = Math.random() * doc_height + 1;
            x[i] = r[i] * sn + cx[i];
            y[i] = cy[i];
        }
        function makeRain() {
            r[i] = 1;
            cx[i] = Math.random() * doc_width + 1;
            cy[i] = 1;
            x[i] = r[i] * sn + cx[i];
            y[i] = r[i] * cs + cy[i];
        }
        function updateRain() {
            r[i] += s;
            x[i] = r[i] * sn + cx[i];
            y[i] = r[i] * cs + cy[i];
        }
        function raindropNS() {
            for (i = 0; i < no; ++ i) {
                updateRain();
                if ((x[i] <= 1) || (x[i] >= (doc_width - 20)) || (y[i] >= (doc_height - 20))) {
                    makeRain();
                    doc_width = self.innerWidth;
                    doc_height = self.innerHeight;
                }
                document.layers["dot"+i].top = y[i];
                document.layers["dot"+i].left = x[i];

            }
            setTimeout("raindropNS()", speed);
        }
        function raindropIE() {
            for (i = 0; i < no; ++ i) {
                updateRain();
                if ((x[i] <= 1) || (x[i] >= (doc_width - 20)) || (y[i] >= (doc_height - 20))) {
                    makeRain();
                    doc_width = document.body.clientWidth;
                    doc_height = document.body.clientHeight;
                }
                document.all["dot"+i].style.pixelTop = y[i];
                document.all["dot"+i].style.pixelLeft = x[i];

            }
            setTimeout("raindropIE()", speed);
        }
        if (ns4up) {
            raindropNS();
        }
        else if (ie4up) {
            raindropIE();
        }
        // End -->
        </script>
            <!--
                This script downloaded from www.JavaScriptBank.com
                Come to view and download over 2000+ free javascript at www.JavaScriptBank.com
            -->

    @if ($hieuung->hieu_ung == 'Lá vàng rơi')
        <script>
            var image = "{{ asset('public/rungphong_04.png') }}"; //Image path should be given here
            var no = 100; // No of images should fall
            var time = 0; // Configure whether image should disappear after x seconds (0=never):
            var speed = 10; // Fix how fast the image should fall
            var i, dwidth = 1000,
                dheight = 500;
            var nht = dheight;
            var toppos = 0;

            if (document.all) {
                var ie4up = 1;
            } else {
                var ie4up = 0;
            }

            if (document.getElementById && !document.all) {
                var ns6up = 1;
            } else {
                var ns6up = 0;
            }

            function getScrollXY() {
                var scrOfX = 10,
                    scrOfY = 10;
                if (typeof(window.pageYOffset) == 'number') {
                    //Netscape compliant
                    scrOfY = window.pageYOffset;
                    scrOfX = window.pageXOffset;
                } else if (document.body && (document.body.scrollLeft || document.body.scrollTop)) {
                    //DOM compliant
                    scrOfY = document.body.scrollTop;
                    scrOfX = document.body.scrollLeft;
                } else if (document.documentElement &&
                    (document.documentElement.scrollLeft || document.documentElement.scrollTop)) {
                    //IE6 standards compliant mode
                    scrOfY = document.documentElement.scrollTop;
                    scrOfX = document.documentElement.scrollLeft;
                }
                return [scrOfX, scrOfY];
            }

            var timer;

            function ranrot() {

                var a = getScrollXY()
                if (timer) {
                    clearTimeout(timer);
                }
                toppos = a[1];
                dheight = nht + a[1];
                //alert(dheight);

                timer = setTimeout('ranrot()', 2000);
            }

            ranrot();

            function iecompattest() {
                if (document.compatMode && document.compatMode != "BackCompat") {
                    return document.documentElement;
                } else {
                    return document.body;
                }

            }
            if (ns6up) {
                dwidth = window.innerWidth;
                dheight = window.innerHeight;
            } else if (ie4up) {
                dwidth = iecompattest().clientWidth;
                dheight = iecompattest().clientHeight;
            }

            nht = dheight;

            var cv = new Array();
            var px = new Array(); //position variables
            var py = new Array(); //position variables
            var am = new Array(); //amplitude variables
            var sx = new Array(); //step variables
            var sy = new Array(); //step variables

            for (i = 0; i < no; ++i) {
                cv[i] = 0;
                px[i] = Math.random() * (dwidth - 100); // set position variables
                py[i] = Math.random() * dheight; // set position variables
                am[i] = Math.random() * 20; // set amplitude variables
                sx[i] = 0.02 + Math.random() / 10; // set step variables
                sy[i] = 0.7 + Math.random(); // set step variables
                document.write("<div id=\"dot" + i + "\" style=\"POSITION: absolute; Z-INDEX: " + i +
                    "; VISIBILITY: visible; TOP: 15px;LEFT: 15px;\"><img src='" + image + "' border=\"0\"><\/div>");
            }

            function animation() { // animation function
                for (i = 0; i < no; ++i) { // iterate for every dot
                    py[i] += sy[i];
                    if (py[i] > dheight - 50) {
                        px[i] = Math.random() * (dwidth - am[i] - 100);
                        py[i] = toppos;
                        sx[i] = 0.02 + Math.random() / 10;
                        sy[i] = 0.7 + Math.random();
                    }
                    cv[i] += sx[i];
                    document.getElementById("dot" + i).style.top = py[i] + "px";
                    document.getElementById("dot" + i).style.left = px[i] + am[i] * Math.sin(cv[i]) + "px";
                }
                atime = setTimeout("animation()", speed);

            }

            function hideimage() {
                if (window.atime) clearTimeout(atime)
                for (i = 0; i < no; i++)
                    document.getElementById("dot" + i).style.visibility = "hidden"
            }
            if (ie4up || ns6up) {
                animation();
                if (time > 0)
                    setTimeout("hideimage()", time * 1000)
            }
            animation();

        </script>
    @endif

    @if ($hieuung->hieu_ung == 'Hoa mai rơi')
        <script type='text/javascript'>
            //<![CDATA[
            var pictureSrc =
                "https://1.bp.blogspot.com/-CXx9jt2JMRk/Vq-Lh5fm88I/AAAAAAAASwo/XivooDn_oSY/s1600/hoamai.png"; //the location of the snowflakes
            var pictureWidth = 15; //the width of the snowflakes
            var pictureHeight = 15; //the height of the snowflakes
            var numFlakes = 10; //the number of snowflakes
            var downSpeed = 0.01; //the falling speed of snowflakes (portion of screen per 100 ms)
            var lrFlakes = 10; //the speed that the snowflakes should swing from side to side


            if (typeof(numFlakes) != 'number' || Math.round(numFlakes) != numFlakes || numFlakes < 1) {
                numFlakes = 10;
            }

            //draw the snowflakes
            for (var x = 0; x < numFlakes; x++) {
                if (document.layers) { //releave NS4 bug
                    document.write('<layer id="snFlkDiv' + x + '"><imgsrc="' + pictureSrc + '" height="' +
                        pictureHeight +
                        '"width="' + pictureWidth + '" alt="*" border="0"></layer>');
                } else {
                    document.write('<div style="position:absolute; z-index:9999;"id="snFlkDiv' + x + '"><img src="' +
                        pictureSrc + '"height="' + pictureHeight + '" width="' + pictureWidth +
                        '" alt="*"border="0"></div>');
                }
            }

            //calculate initial positions (in portions of browser window size)
            var xcoords = new Array(),
                ycoords = new Array(),
                snFlkTemp;
            for (var x = 0; x < numFlakes; x++) {
                xcoords[x] = (x + 1) / (numFlakes + 1);
                do {
                    snFlkTemp = Math.round((numFlakes - 1) * Math.random());
                } while (typeof(ycoords[snFlkTemp]) == 'number');
                ycoords[snFlkTemp] = x / numFlakes;
            }

            //now animate
            function flakeFall() {
                if (!getRefToDivNest('snFlkDiv0')) {
                    return;
                }
                var scrWidth = 0,
                    scrHeight = 0,
                    scrollHeight = 0,
                    scrollWidth = 0;
                //find screen settings for all variations. doing this every time allows for resizing and scrolling
                if (typeof(window.innerWidth) == 'number') {
                    scrWidth = window.innerWidth;
                    scrHeight = window.innerHeight;
                } else {
                    if (document.documentElement && (document.documentElement.clientWidth || document.documentElement
                            .clientHeight)) {
                        scrWidth = document.documentElement.clientWidth;
                        scrHeight = document.documentElement.clientHeight;
                    } else {
                        if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
                            scrWidth = document.body.clientWidth;
                            scrHeight = document.body.clientHeight;
                        }
                    }
                }
                if (typeof(window.pageYOffset) == 'number') {
                    scrollHeight = pageYOffset;
                    scrollWidth = pageXOffset;
                } else {
                    if (document.body && (document.body.scrollLeft || document.body.scrollTop)) {
                        scrollHeight = document.body.scrollTop;
                        scrollWidth = document.body.scrollLeft;
                    } else {
                        if (document.documentElement && (document.documentElement.scrollLeft || document.documentElement
                                .scrollTop)) {
                            scrollHeight = document.documentElement.scrollTop;
                            scrollWidth = document.documentElement.scrollLeft;
                        }
                    }
                }
                //move the snowflakes to their new position
                for (var x = 0; x < numFlakes; x++) {
                    if (ycoords[x] * scrHeight > scrHeight - pictureHeight) {
                        ycoords[x] = 0;
                    }
                    var divRef = getRefToDivNest('snFlkDiv' + x);
                    if (!divRef) {
                        return;
                    }
                    if (divRef.style) {
                        divRef = divRef.style;
                    }
                    var oPix = document.childNodes ? 'px' : 0;
                    divRef.top = (Math.round(ycoords[x] * scrHeight) + scrollHeight) + oPix;
                    divRef.left = (Math.round(((xcoords[x] * scrWidth) - (pictureWidth / 2)) + ((scrWidth / ((
                            numFlakes +
                            1) * 4)) * (Math.sin(lrFlakes * ycoords[x]) - Math.sin(3 * lrFlakes * ycoords[
                            x])))) +
                        scrollWidth) + oPix;
                    ycoords[x] += downSpeed;
                }
            }

            //DHTML handlers
            function getRefToDivNest(divName) {
                if (document.layers) {
                    return document.layers[divName];
                } //NS4
                if (document[divName]) {
                    return document[divName];
                } //NS4 also
                if (document.getElementById) {
                    return document.getElementById(divName);
                } //DOM (IE5+, NS6+, Mozilla0.9+, Opera)
                if (document.all) {
                    return document.all[divName];
                } //Proprietary DOM - IE4
                return false;
            }

            window.setInterval('flakeFall();', 100);
            //]]>

        </script>
    @endif

    {{-- {{ $hieuung->hieu_ung }} --}}
    @if ($hieuung->hieu_ung == 'Tuyết rơi')
        <div class='snow-container'>
            <div class='snow foreground'></div>
            <div class='snow foreground layered'></div>
            <div class='snow middleground'></div>
            <div class='snow middleground layered'></div>
            <div class='snow background'></div>
            <div class='snow background layered'></div>
        </div>

    @endif
    @if($hieuung->hieu_ung == 'Noel')
    <script>
        document.write('<style>body{padding-bottom:20px}#e_itexpress_left{display:none;position:fixed;z-index:9999;top:0;left:0}#e_itexpress_right{display:none;position:fixed;z-index:9999;top:0;right:0}#e_itexpress_footer{display:none;position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(https://itexpress.vn/images/noel/ft.png) repeat-x bottom left}#e_itexpress_bottom_left{display:none;position:fixed;z-index:9999;bottom:20px;left:20px}@media (min-width: 992px){#e_itexpress_left,#e_itexpress_right,#e_itexpress_footer,#e_itexpress_bottom_left{display:block}}</style><img id="e_itexpress_left" src="https://itexpress.vn/images/noel/topleft.png"/><img id="e_itexpress_right" src="https://itexpress.vn/images/noel/topright.png"/><div id="e_itexpress_footer"></div><img id="e_itexpress_bottom_left" src="https://itexpress.vn/images/noel/bottomleft.png"/><div style="position:fixed;z-index:9999;bottom:3px;right:3px; font-size:12px;color:#8D8D8D;">by <a href="https://itexpress.vn/vi/tin-tuc/chia-se-code-javascript-tao-tuyet-roi--khung-canh-giang-sinh-cho-website-183.html">ITExpress.vn</a></div>');
var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:18px;color:#000">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
    </script>
    @endif
    <!-- Offcanvas Menu Section Begin -->
    @include('common.offcanvasmenusectionbegin')
    <!-- Offcanvas Menu Section End -->
    <!-- Header Section Begin -->
    @include('common.menu-mobile')
    @include('common.header')
    <div class="col-lg-12" id="showOrHide" style="display: none;z-index: 5;">
        <div class="booking-form">
            <form>
                @csrf
                <div class="row">
                    <div class="col-lg-3">
                    <div class="check-date">
                        <label for="date-in">Ngày Đến Xem:</label>
                        <input type="datetime-local" data class="form-control datein1" value="@php $today = date("Y-m-d\TH:i"); echo $today; @endphp" id="datein1">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="select-option">
                        <label for="guest">Loại Phòng:</label>
                        <select id="loaiphong12">
                            @foreach($loaiphong as $key)
                                <option value="{{ $key->id_loai_phong }}">{{ $key->ten_loai_phong }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="select-option">
                        <label for="guest">Địa Chỉ:</label>
                        <select id="guest13">
                            {{-- <option value="">2 Adults</option> --}}
                            @foreach($gioithieu as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->diachi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="select-option">
                        <label for="room">Số Lượng Phòng:</label>
                        {{-- <select id="room">
                            <option value="">1 Room</option>
                            <option value="">2 Room</option>
                        </select> --}}
                        <input class="form-control" id="soluong_phong" onkeypress="return isNumberKey1(event)" min="1">
                    </div>
                    </div>
                </div>
                <div class="text-center col-lg-12">
                    <a id="datngay" class="btn btn-primary">Đặt Ngay</a>
                    </br>
                </div>
            </form>
        </div>
    </div>
    <!-- Header End -->
    @yield('content')
    <!-- Footer Section Begin -->
    @include('common.footer')

    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#add').on('click',function(){
                var id = $(this).data('id');
                var cart_product_id = $('.cart_product_id_'+id).val();
                var cart_product_ten_loai_phong = $('.cart_product_ten_loai_phong_'+id).val();
                var cart_product_gia = $('.cart_product_gia_'+id).val();
                var cart_product_image = $('.cart_product_image_'+id).val();
                var cart_product_qty = $('.cart_product_qty_'+id).val();
                var _token = $('input[name="_token"]').val();
                var diachi = $( "#guest12 option:selected" ).text();
                var id_gioithieu = $("#guest12 option:selected").val();
                {{-- alert(id_gioithieu); --}}
                {{-- console.log($('.ngayden').val()); --}}
                var ngayden = $('.ngayden').val();
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
                {{-- console.log(today);
                console.log(diachi); --}}
                if($('.ngayden').val()<today){
                    alert('Ngày đến lớn hơn ngày hiện tại');
                } else {
                    $.ajax({
                        url:'{{ route('addtoCart') }}/'+ngayden+'/'+diachi,
                        method:'POST',
                        data:{cart_product_id:cart_product_id,cart_product_ten_loai_phong:cart_product_ten_loai_phong,cart_product_gia:cart_product_gia,cart_product_image:cart_product_image,cart_product_qty:cart_product_qty,id_gioithieu:id_gioithieu,_token:_token},
                        success:function(data){
                            swal({
                                title: "Thêm giỏ hàng thành công",
                                text: "Bạn hãy nhấp vào nút!",
                                icon: "success",
                                button: "Thoát",
                            });
                               {{-- alert(data); --}}
                        }

                    })
                    .done(function(){
                        $("#load_sl").load(location.href + " #load_sl");
                        $("#load_sl1").load(location.href + " #load_sl1");
                        $("#load_sl2").load(location.href + " #load_sl2");
                        $("#load_inf").load(location.href + " #load_inf");
                    });
                }
            });
        });

    </script>
    {{--  Đặt ngay  --}}
    <script>
        $(document).ready(function(){
            var now = new Date();
            {{-- var now = timestampToDatetimeInputString(Date.now()); --}}
            {{-- $('.datein1').val(now); --}}
            $('#datngay').on('click',function(){
                var ngayden = $('#datein1').val();
                var _token = $('input[name="_token"]').val();
                var loaiphong = $('#loaiphong12 option:selected').text();
                var id_loaiphong = $('#loaiphong12 option:selected').val();
                var diachi = $( "#guest13 option:selected" ).text();
                var id_gioithieu = $( "#guest13 option:selected" ).val();
                var soluong_phong = $('#soluong_phong').val();
                if(!soluong_phong){
                    alert('Số lượng phòng không được bỏ trống');
                } else{
                    $.ajax({
                        url:'{{ route('datngay') }}',
                        method:'POST',
                        data:{ngayden:ngayden,loaiphong:loaiphong,id_loaiphong:id_loaiphong,diachi:diachi,id_gioithieu:id_gioithieu,soluong_phong:soluong_phong,_token:_token},
                        success:function(data){
                            swal({
                                title: "Thêm giỏ hàng thành công",
                                text: "Bạn hãy nhấp vào nút!",
                                icon: "success",
                                button: "Thoát",
                            });
                            $('.sourceDiv').fadeIn();
                            {{-- $('#countryList').html(data); --}}
                            $('.sourceDiv').html(data);
                        }
                    }).done(function(){
                        var link = $(this).attr("href");
                        $('.sourceDiv').load(location.href + " .sourceDiv");
                        $("#load_sl").load(location.href + " #load_sl");
                        $("#load_sl1").load(location.href + " #load_sl1");
                        $("#load_sl2").load(location.href + " #load_sl2");
                        $("#load_inf").load(location.href + " #load_inf");

                    });
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();
            var time = today.getHours() + ":" + today.getMinutes();
            {{-- var minute = dateVal.getMinutes().toString().padStart(2, "0"); --}}
            {{-- today = yyyy + '-' + mm + '-' + dd +'T'+time; --}}
            {{-- today =document.querySelector('input[type="datetime-local"]').val(); --}}
            var today = $('#datein1000').val();
            {{-- console.log(today); --}}

            {{-- var ngayden = $('#datein1000').val(today);  --}}
            $('#datein1000').on('change',function(){
                {{-- console.log($('#datein1000').val()); --}}
                if($('#datein1000').val()<today){
                    alert('Ngày bạn vừa nhập bé hơn hiện tại');
                } else {
                    $.ajax({
                        url:"{{ route('ngayden') }}/"+$('#datein1000').val(),
                        type:"GET",
                        success:function(){

                        }
                    });
                }
            });
            $.ajax({
                url:"{{ route('ngayden') }}/"+today,
                type:"GET",
                success:function(){

                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fa-trash').on('click',function(){
                var id = $(this).data('id');
                {{-- alert(id); --}}
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('trashcart') }}/"+id,
                    type:"GET",
                    success: function (){
                    $('#remove'+id).remove();
                    }
                })
                .done(function(){
                    $('#load_sl').load(location.href + " #load_sl");
                    $("#load_sl1").load(location.href + " #load_sl1");
                    $("#load_inf").load(location.href + " #load_inf");
                    $("#load_total").load(location.href + " #load_total");
                });
            });
        });
    </script>
    <script>
        {{-- $(document).ready(function() {
            var id_quatity = $(this).data('id_quantity');
            console.log(id_quatity);
        }); --}}
        function isNumberKey1(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            {{-- if($('#soluong').val()==0){
                $('#soluong').val(1);
            } --}}

            return true;
        }
    </script>
    <script type="text/javascript">
        function quantity_left_minus(e){
            var quantitiy=1;
            var quantity = parseInt($('#quantity'+e).val());
            $('#quantity'+e).val(quantity - 1);
            if($('#quantity'+e).val()<=0){
                $('#quantity'+e).val(1);
            }
            {{-- console.log($('#quantity'+e).val()); --}}
            $.ajax({
                url:"{{ route('updatecart') }}/"+e+"/"+$('#quantity'+e).val(),
                type:"GET",
                success:function(){

                }
            }).done(function(){
                $('#load_sl').load(location.href + " #load_sl");
                $("#load_sl1").load(location.href + " #load_sl1");
                $("#load_inf").load(location.href + " #load_inf");
                $("#load_total").load(location.href + " #load_total");
            });

        };
        function quatity(e){
            var id_quatity = parseInt($('#quantity'+e).val());
            {{--  console.log(id_quatity);  --}}
            $.ajax({
                url:"{{ route('updatecart') }}/"+e+"/"+id_quatity,
                type:"GET",
                success:function(){
                }
            }).done(function(){
                $('#load_sl').load(location.href + " #load_sl");
                $("#load_sl1").load(location.href + " #load_sl1");
                $("#load_inf").load(location.href + " #load_inf");
                $("#load_total").load(location.href + " #load_total");
            });
        };
        function isNumberKey(evt,e){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            if($('#quantity'+e).val()==0){
                $('#quantity'+e).val(1);
            }

            return true;
        }
        function quantity_right_plus(e){
            var quantitiy=1;
            var quantity = parseInt($('#quantity'+e).val());
            $('#quantity'+e).val(quantity + 1);
            {{-- console.log($('#quantity'+e).val()); --}}
            $.ajax({
                url:"{{ route('updatecart') }}/"+e+"/"+$('#quantity'+e).val(),
                type:"GET",
                success:function(){

                }
            }).done(function(){
                $('#load_sl').load(location.href + " #load_sl");
                $("#load_sl1").load(location.href + " #load_sl1");
                $("#load_inf").load(location.href + " #load_inf");
                $("#load_total").load(location.href + " #load_total");
            });
        };
        {{-- $(document).ready(function(){
            var id_quantity_right_plus = $('#quantity-right-plus').val();
            var quantitiy=1;
               $('.quantity-right-plus-'+id_quantity_right_plus).click(function(e){

                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity'+id_quantity_right_plus).val());

                    // If is not undefined

                        $('#quantity'+id_quantity_right_plus).val(quantity + 1);

                        if(quantity<=0){
                            $('#quantity'+id_quantity_right_plus).val(1);
                        }
                        // Increment

                });
                 $('.quantity-left-minus').click(function(e){
                    // Stop acting like a button

                    console.log(id_quantity_left_minus);
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                        // Increment
                        if(quantity>1){
                        $('#quantity').val(quantity - 1);
                        }
                        console.log(quantitiy);
                        if(quantity<=0){
                            quantity=0;

                        }

                });

            }); --}}
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#button-addon3').on('click',function(){
                var inputma = $('#inputma').val();
                var _token = $('input[name="_token"]').val();
                {{-- console.log(_token); --}}
                if(inputma){
                    $.ajax({
                        url:"{{ route('check_coupon') }}",
                        type:"POST",
                        data:{inputma:inputma,_token:_token},
                        success:function(data){
                            setTimeout($('#aplycoupon').html('Áp dụng mã thành công'),20000000000000000);
                        },
                        error:function(data){
                            setTimeout($('#aplycoupon').html('Mã không tồn tại'),20000000000000000);
                        }
                    }).done(function(){
                        $('#load_sl').load(location.href + " #load_sl");
                        $("#load_sl1").load(location.href + " #load_sl1");
                        $("#load_inf").load(location.href + " #load_inf");
                        $("#load_total").load(location.href + " #load_total");
                    });
                }else{
                    setTimeout($('#aplycoupon').html('Hãy nhập mã giảm giá'),20000000000000000);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#removecoupon').on('click',function(){
                {{-- alert('a'); --}}
                $.ajax({
                    url:"{{ route('remove_coupon') }}",
                    type:"GET",
                    success:function(){
                    }
                }).done(function(){
                    $('#load_sl').load(location.href + " #load_sl");
                    $("#load_sl1").load(location.href + " #load_sl1");
                    $("#load_inf").load(location.href + " #load_inf");
                    $("#load_total").load(location.href + " #load_total");
                });
            });
        });
    </script>
    <script>
        @if(Auth::guard('taikhoan')->check())
            $(document).ready(function(){
                    $('#ghichu').on('keyup',function(){
                        var ghichu = document.getElementById("ghichu").value;
                        {{-- session.setAttribute("ghichu", ghichu); --}}
                        {{-- console.log(ghichu); --}}
                        $.ajax({
                            url:"{{ route('postghichu') }}",
                            type:"GET",
                            data:{ghichu:ghichu},
                            success:function(data){
                                console.log(data);
                                {{-- alert(data); --}}
                            }
                        });
                    });
                {{-- var user = "{{Auth::guard('taikhoan')->user()->ten_tk}}"
                console.log(user); --}}
            });
        @endif
    </script>
    <script>
        setInterval(function(){
                $.ajax({
                    url:"{{ route('online') }}",
                    type:"GET",
                    success:function(){
                        $("#online").load(location.href + " #online");
                        $("#online1").load(location.href + " #online1");
                    }
                })
        }, 60000);
    </script>
    @foreach($gioithieu as $key)
        <script>
            $(document).ready(function(){
                    $('#diachi'+{{ $key->id }}).on('click',function(){
                        var diachi = $(this).html();
                        $('#setdiachi').html(diachi);
                        var setdiachi= $('#setdiachi').html();
                        {{-- console.log(setdiachi); --}}
                        {{-- setdiachi --}}
                        $.ajax({
                            url:"{{ route('diachi') }}/"+setdiachi,
                            type:"GET",
                            success:function(){
                                swal({
                                    title: "Chọn địa thành công",
                                    text: "Bạn hãy nhấp vào nút!",
                                    icon: "success",
                                    button: "Thoát",
                                });
                            }
                        }).done(function(){
                            $("#setdiachi").load(location.href + " #setdiachi");
                            $("#load").load(" #load");
                        });
                    });
            });
        </script>
        <script>
            var $ = jQuery;
            $(document).ready(function($){

                if($(window).width() < 667){
                    $("#carouselExampleCaptions .custom-js .custom-carousel").addClass("carousel-item");
                }
            });
        </script>
        {{-- <a class="diachi" id="{{ $key->diachi }}" style="width: 450px">{{ $key->diachi }}</a> --}}
    @endforeach


    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#quenmatkhau').on('click',function(){
                var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                var _token = $('input[name="_token"]').val();
                {{-- console.log( pattern.test($('#email').val())); --}}
                if($('#email').val()==''){
                    $("#mess").html('Bạn hãy điền số điện thoại hoặc email!');
                } else{
                    if(pattern.test($('#email').val())==true){
                        var email = $('#email').val();
                        $.ajax({
                            url:"{{ route('forgetpassword') }}",
                            type:"POST",
                            data:{email:email,_token:_token},
                            success:function(data){
                                console.log(data);
                                $("#mess").html('Vui lòng kiểm tra mail!');
                            }
                        });
                    } else {
                        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                        var mobile = $('#email').val();
                        if(mobile !==''){
                            if (vnf_regex.test(mobile) == false)
                            {
                                $("#mess").html('Số điện thoại hoặc mật khẩu không chính xác!')
                            }else{
                                var sdt = $('#email').val();
                                {{-- $("#mess").html('Số điện thoại của bạn hợp lệ!'); --}}
                                $.ajax({
                                    url:"{{ route('forgetpassword') }}",
                                    type:"POST",
                                    data:{sdt:sdt,_token:_token},
                                    success:function(data){
                                        $("#mess").html('Vui lòng kiểm tra tin nhắn điện thoại!');
                                    }
                                });
                            }
                        }else{
                            $("#mess").html('Số điện thoại hoặc mật khẩu không chính xác!');
                        }
                    }
                }


            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('#quenmatkhau1').on('click',function(){
                var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                var _token = $('input[name="_token"]').val();
                {{-- console.log( pattern.test($('#email').val())); --}}
                if($('#email1').val()==''){
                    $("#mess1").html('Bạn hãy điền số điện thoại hoặc email!');
                } else{
                    if(pattern.test($('#email1').val())==true){
                        var email = $('#email1').val();
                        $.ajax({
                            url:"{{ route('forgetpassword') }}",
                            type:"POST",
                            data:{email:email,_token:_token},
                            success:function(data){
                                console.log(data);
                                $("#mess1").html('Vui lòng kiểm tra mail!');
                            }
                        });
                    } else {
                        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                        var mobile = $('#email1').val();
                        if(mobile !==''){
                            if (vnf_regex.test(mobile) == false)
                            {
                                $("#mess1").html('Số điện thoại hoặc mật khẩu không chính xác!')
                            }else{
                                var sdt = $('#email1').val();
                                {{-- $("#mess1").html('Số điện thoại của bạn hợp lệ!'); --}}
                                $.ajax({
                                    url:"{{ route('forgetpassword') }}",
                                    type:"POST",
                                    data:{sdt:sdt,_token:_token},
                                    success:function(data){
                                        $("#mess1").html('Vui lòng kiểm tra tin nhắn điện thoại!');
                                    }
                                });
                            }
                        }else{
                            $("#mess1").html('Số điện thoại hoặc mật khẩu không chính xác!');
                        }
                    }
                }
            });
        });
    </script>
    <script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script> --}}
    <script src="{{ asset('public/js/main.js') }}"></script>
    <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('public/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('public/js/sanh.js') }}"></script>

    {{-- <script src="{{ asset('public/js/contract.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- <script type="text/javascript" src="https://itexpress.vn/js/noel_black.js"></script> --}}

    {{-- <script type="text/javascript" src="jquery.js"></script> <-- put me here --> --}}
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script> --}}
    {{-- <script src="http://bainternet-js-cdn.googlecode.com/svn/trunk/js/jQuery%20BlockUI%20Plugin/2.39/jquery.blockUI.js"></script> --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('public/js/sweetalert.min.js') }}"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="{{ asset('public/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>
