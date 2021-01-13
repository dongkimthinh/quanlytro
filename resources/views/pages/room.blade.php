@extends('masterpage')
@section('title')
    Rooms
@endsection
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="{{ route('index') }}">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">

                @for($i = 0; $i< count($room);$i++)
                    @for($j=$i+1; $j < count($room);$j++)
                        <div class="col-lg-6">
                            <div class="room-wrap d-md-flex">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('public/img/room/room-7.jpg') }});"></a>
                                <div class="half left-arrow d-flex align-items-center">
                                    <div class="text p-4 p-xl-5 text-center">
                                        <p class="star mb-0"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                        <h3 class="mb-0"><a href="rooms.html">Suite Room</a></h3>
                                        <p class="mb-3"><span class="price mr-1">$120.00</span> <span class="per">per
                                                night</span></p>
                                        <ul class="list-accomodation">
                                            <li><span>Size:</span> 45 m2</li>
                                            <li><span>Capacity:</span> Max persion 5</li>
                                            <li><span>Bed:</span> King Beds</li>
                                            <li><span>Services:</span> Wifi, Television, Bathroom,...</li>
                                        </ul>
                                        <p class="pt-1"><a href="{{ route('details') }}" class="btn-custom px-3 py-2">View Room
                                                Details <span class="icon-long-arrow-right"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @if($j%2==0)
                                @break
                            @endif
                    @endfor
                    @for($g = $j+1; $g < count($room);$g++)
                        <div class="col-lg-6">
                            <div class="room-wrap d-md-flex">
                                <a href="#" class="img order-md-last"
                                    style="background-image: url({{ asset('public/img/room/room-9.jpg') }});"></a>
                                <div class="half right-arrow d-flex align-items-center">
                                    <div class="text p-4 p-xl-5 text-center">
                                        <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span></p>

                                        <h3 class="mb-0"><a href="rooms.html">Family Room</a></h3>
                                        <p class="mb-3"><span class="price mr-1">$120.00</span> <span class="per">per night</span>
                                        </p>
                                        <ul class="list-accomodation">
                                            <li><span>Size:</span> 45 m2</li>
                                            <li><span>Capacity:</span> Max persion 5</li>
                                            <li><span>Bed:</span> King Beds</li>
                                            <li><span>Services:</span> Wifi, Television, Bathroom,...</li>
                                        </ul>
                                        <p class="pt-1"><a href="room-details.html" class="btn-custom px-3 py-2">View Room Details
                                                <span class="icon-long-arrow-right"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @if($g%2==0)
                                @break
                            @endif
                    @endfor
                    <? $i = $g++ ?>
                @endfor






                {{-- <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last"
                            style="background-image: url({{ asset('public/img/room/room-10.jpg') }});"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span></p>

                                <h3 class="mb-0"><a href="rooms.html">Deluxe Room</a></h3>
                                <p class="mb-3"><span class="price mr-1">$120.00</span> <span class="per">per night</span>
                                </p>
                                <ul class="list-accomodation">
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>Capacity:</span> Max persion 5</li>
                                    <li><span>Bed:</span> King Beds</li>
                                    <li><span>Services:</span> Wifi, Television, Bathroom,...</li>
                                </ul>
                                <p class="pt-1"><a href="{{ route('details') }}" class="btn-custom px-3 py-2">View Room
                                        Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url({{ asset('public/images/room-5.jpg') }});"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span></p>
                                <h3 class="mb-0"><a href="rooms.html">Luxury Room</a></h3>
                                <p class="mb-3"><span class="price mr-1">$120.00</span> <span class="per">per night</span>
                                </p>
                                <ul class="list-accomodation">
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>Capacity:</span> Max persion 5</li>
                                    <li><span>Bed:</span> King Beds</li>
                                    <li><span>Services:</span> Wifi, Television, Bathroom,...</li>
                                </ul>
                                <p class="pt-1"><a href="{{ route('details') }}" class="btn-custom px-3 py-2">View Room
                                        Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url({{ asset('public/images/room-6.jpg') }});"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span></p>
                                <h3 class="mb-0"><a href="rooms.html">Superior Room</a></h3>
                                <p class="mb-3"><span class="price mr-1">$120.00</span> <span class="per">per night</span>
                                </p>
                                <ul class="list-accomodation">
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>Capacity:</span> Max persion 5</li>
                                    <li><span>Bed:</span> King Beds</li>
                                    <li><span>Services:</span> Wifi, Television, Bathroom,...</li>
                                </ul>
                                <p class="pt-1"><a href="{{ route('details') }}" class="btn-custom px-3 py-2">View Room
                                        Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-12" style="top:25px !important; ">
            <div class="room-pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-lg-12"></div>
    </section>
    <!-- Rooms Section End -->
@endsection
