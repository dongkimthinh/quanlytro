@extends('masterpage')
@section('title')
    Cart
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    {{-- <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Giỏ Hàng</h2>
                        <div class="bt-option">
                            <a href="{{ route('index') }}">Trang Chủ</a>
                            <span>Giỏ Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Breadcrumb Section End -->
  {{-- <!-- For demo purpose -->
  <div class="container py-5 text-center text-white">
    <h1 class="display-4">Bootstrap 4 shopping cart</h1>
    <p class="mb-0 lead">Build a fully structred shopping cart page using Bootstrap 4. </p>
    <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
            <u>Bootstrapious</u></a>
    </p>
  </div> --}}
  <!-- End -->
  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="bg-white rounded shadow-sm col-lg-12 custom-table-cart">
            @if (session()->has('success'))
            @if(is_array(session('success')))
                @foreach(session('success') as $key)
                    <div class="col-lg-12">
                        <h2 style="color: red">{{ $key }}!</h2>
                    </div>
                @endforeach
                @endif
            @endif
          <!-- Shopping cart table -->
          <div class ="col-lg-6">
                Ngày Đến Xem Phòng:<input type="datetime-local" data name="ngayden" value="@php $today = date("Y-m-d\TH:i"); echo $today; @endphp"  class="form-control ngayden" id="datein" style="margin: 0px 0px 0px;padding:6px 12px 6px 25px">
            </br>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Sản Phẩm</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Địa Chỉ</div>
                  </th>
                  {{-- <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Giá</div>
                  </th> --}}
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Số Lượng</div>
                  </th>
                  {{-- <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Giá</div>
                  </th> --}}
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Xóa</div>
                  </th>
                </tr>
              </thead>
              <tbody >
                  {{-- @php
                        echo '<pre>';
                        print_r(Session()->get('cart'));
                        echo '</pre>';
                  @endphp --}}
                  {{-- @php
                        echo '<pre>';
                        print_r(session()->get('coupon'));
                        echo '</pre>';
                  @endphp --}}
                <div class="sourceDiv" id="sourceDiv">
                @if(session()->has('cart'))
                    @foreach(session()->get('cart') as $key => $cart)
                    <tr id="remove{{ $key }}">
                        <td scope="row"  class="border-0">
                        <div class="p-2 custom-cell-tb-cart">
                            <img src="{{ asset('public/hinhtro/'.$cart['product_image']) }}" alt="" width="70" class="rounded shadow-sm img-fluid">
                            <div class="align-middle d-inline-block cv-name-pd-cart">
                              <div class="mb-0 name-pd-cart"> <a href="#" class="align-middle text-dark d-inline-block">{{ $cart['product_loai'] }}</a></div>
                              {{-- <span class="text-muted font-weight-normal font-italic">Loại: {{ $cart['product_loai'] }}</span> --}}
                            </div>
                        </div>
                        </td>
                        <td class="align-middle border-0 loaddiachi">
                                {{ $cart['diachi'] }}
                            {{-- <div class="align-middle d-inline-block cv-name-pd-cart"> --}}
                            {{-- </div> --}}
                        </td>
                        <td class="align-middle border-0 custom-input-group">
                            <div class="col-lg-2">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus-{{ $key }} btn btn-danger btn-number" id="quantity-left-minus" value="{{ $key }}"  data-type="minus" onclick="quantity_left_minus({{ $key }})" data-field="">
                                      <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>
                                <input type="tel" pattern="[1-9]" onkeyup="quatity({{ $key }})" onkeypress="return isNumberKey(event,{{ $key }})" id="quantity{{ $key }}" name="quantity" style="width: 60px;height: 42px !important;" class="form-control input-number" value="{{ $cart['product_qty'] }}" data-id_quantity="{{ $key }}" min="1">
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" onclick="quantity_right_plus({{ $key }})" id="quantity-right-plus" value="{{ $key }}" data-type="plus" data-field="">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                            </div>
                        </td>
                        {{-- <td class="align-middle border-0"><strong>{{ number_format($cart['product_gia'],0,',','.') }}</strong></td> --}}
                        <form>
                            @csrf
                        <td class="align-middle border-0"><a type="button" id="trashcart" class="text-dark" data-id="{{ $key }}"><i data-id="{{ $key }}" class="fa fa-trash"></i></a></td>
                        </form>

                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="align-middle border-0"><strong>Giỏ hàng trống</strong></td>
                    </tr>
                @endif
                </div>
                {{--  <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70" class="rounded shadow-sm img-fluid">
                      <div class="ml-3 align-middle d-inline-block">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5><span class="text-muted font-weight-normal font-italic">Category: Electronics</span>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>$79.00</strong></td>
                  <td class="align-middle"><strong>3</strong></td>
                  <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="rounded shadow-sm img-fluid">
                      <div class="ml-3 align-middle d-inline-block">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                      </div>
                    </div>
                    <td class="align-middle"><strong>$79.00</strong></td>
                    <td class="align-middle"><strong>3</strong></td>
                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>  --}}
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="col-lg-12">
        <p class="mb-4 font-italic">Ghi Chú</p>
        <form>
            @csrf
            <textarea name="" cols="30" rows="2" id="ghichu" class="form-control"></textarea>
        </form>
      </div>
      {{-- <div class="p-4 py-5 bg-white rounded shadow-sm row">
        <div class="col-lg-6">
            @if(session()->has('cart'))
          <div class="px-4 py-3 bg-light rounded-pill text-uppercase font-weight-bold">Mã Giảm Giá</div>
          <div class="p-4">
            <p class="mb-4 font-italic">Nếu bạn có mã phiếu giảm giá, vui lòng nhập mã đó vào ô bên dưới</p>
            <p class="mb-4 font-italic" id="aplycoupon">@if (session('message')) {{ session('message') }} @endif</p>
            <form>
                @csrf
            <div class="p-2 mb-4 border input-group rounded-pill">
              <input type="text" placeholder="Áp dụng phiếu giảm giá" id="inputma" aria-describedby="button-addon3" style="width:85%; height: 42px !important;float: left;padding:1px 10px 1px 10px;" class="border-0 form-control">
              <div class="border-0 input-group-append">
                <button id="button-addon3" type="button" class="px-4 btn btn-dark rounded-pill"><i class="mr-2 fa fa-gift"></i>Áp dụng</button>
              </div>
            </div>
            </form>
          </div>
          <div class="px-4 py-3 bg-light rounded-pill text-uppercase font-weight-bold">Nhập Thông Tin Ghi Chú</div>
          <div class="p-4">
            <p class="mb-4 font-italic">Ghi Chú</p>
            <form>
                @csrf
                <textarea name="" cols="30" rows="2" id="ghichu" class="form-control"></textarea>
            </form>
          </div>
          @endif
        </div>
        <div class="col-lg-6">
            <div class="col-lg-12" id="load_total">
                @if(session()->has('cart'))
                <div class="px-4 py-3 bg-light rounded-pill text-uppercase font-weight-bold">TÓM TẮT THEO THỨ TỰ </div>
                <div class="p-4">
                <p class="mb-4 font-italic">Chi phí vận chuyển và chi phí bổ sung được tính dựa trên giá trị bạn đã nhập.</p>
                <ul class="mb-4 list-unstyled">
                    @php
                        $total = 0;
                        $coupon = 0;
                    @endphp
                    @foreach(session()->get('cart') as $cart)
                        @php
                            $subtotal = ($cart["product_gia"]*$cart["product_qty"]);
                            $total = ($total + $subtotal);
                        @endphp
                    @endforeach
                    @if(session()->has('coupon'))
                        @foreach(session()->get('coupon') as $key => $cp)
                            @if($cp['coupon_condition']=='1')
                                @php
                                    $coupon += ($total*$cp['coupon_number'])/100;
                                @endphp
                            @else
                                @php
                                    $coupon += $cp['coupon_number'];
                                @endphp
                            @endif
                        @endforeach
                    @endif
                    <li class="py-3 d-flex justify-content-between border-bottom"><strong class="text-muted">Tạm tính </strong><strong>{{ number_format($total,0,',','.') }} VNĐ</strong></li>
                    <li class="py-3 d-flex justify-content-between border-bottom"><strong class="text-muted">Giá giảm</strong><strong>{{ number_format($coupon,0,',','.') }}
                     VNĐ <i class="fas fa-backspace" id="removecoupon" style="color: #111111"></i></strong></li>
                    {{-- <li class="py-3 d-flex justify-content-between border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                    <li class="py-3 d-flex justify-content-between border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li> --}}
                    {{-- <li class="py-3 d-flex justify-content-between border-bottom"><strong class="text-muted">Thành tiền</strong>
                    <h5 class="font-weight-bold">{{ number_format($total-$coupon,0,',','.') }} VNĐ</h5>
                    </li>
                </ul>

                @endif --}}
                @if(session()->has('cart'))
                <a href="@if(Auth::guard('taikhoan')->check()) {{ route('checkout') }} @else {{ route('logincart') }} @endif" id="checkout" class="btn btn-dark rounded-pill btn-block">Đặt Phòng</a>
                @endif
            </div>
            </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
