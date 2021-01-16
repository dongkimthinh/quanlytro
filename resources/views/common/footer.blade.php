<footer class="footer-section">
    <div class="container">
        <div class="footer-text">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-about">
                        <div class="logo">
                            <a href="#">
                                <img src="{{ asset('public/img/logohachinh.jpg') }}" style="width: 86px;height: 50px" alt="">
                            </a>
                        </div>
                        <p>Cho thuê phòng trọ giá rẻ<br /> tại TP.HCM</p>
                        {{-- <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div> --}}

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>Liên hệ</h6>
                        <ul>
                            @foreach($quanly as $key => $value)
                                @php
                                    $phone = str_replace(" ", "", $value->sdt);
                                    if(strlen($phone)==10){
                                        $kq = substr($phone, 0, 4) . " " . substr($phone, 4, 3) . " " . substr($phone, 7, 3);
                                    } else{
                                        $kq = substr($phone, 0, 4) . " " . substr($phone, 4, 4) . " " . substr($phone, 8, 3);
                                    }
                                @endphp
                            <li>{{ $kq }}({{ $value->ten }})</li>
                            <li>{{ $value->email }}</li>
                            @endforeach

                            @php
                                $stt = 0;
                            @endphp
                            @foreach($gioithieu as $key => $value)
                                @for($i=0;$i<count($gioithieu);$i++)
                                    <li>Chi Nhánh {{ $stt=$stt+1 }}:{{ $value->diachi }}</li>
                                    @break
                                @endfor
                            @endforeach
                            {{--  <li>31 Cống Lỡ, Phường 15, Quận Gò Vấp, TP.HCM </li>
                            <li>17B Tân Trụ, Phường 15, Quận Tân Bình, TP.HCM</li>  --}}
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3 offset-lg-1">
                    <div class="ft-newslatter">
                        <h6>New latest</h6>
                        <p>Get the latest updates and offers.</p>
                        <form action="#" class="fn-form">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="copyright-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    {{-- <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms of use</a></li>

                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Environmental Policy</a></li>
                    </ul> --}}
                </div>
                <div class="col-lg-5">
                    <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Thịnh Dev</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f730d60f0e7167d0014a6d8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> --}}
<!--End of Tawk.to Script-->
