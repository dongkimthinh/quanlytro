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
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="{{ route('index') }}">Home</a>
                            <span>Rooms</span>
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
  <div class="jumbotron text-center">
    <h1 class="display-3">Cảm Ơn Bạn Đã Đặt Phòng Trọ!</h1>
    <p class="lead"><strong>Vui lòng kiểm tra email</strong> đơn đặt hàng đã được gửi đến.</p>
    <hr>
    <p>
      Mọi thắc mắc? <a href="">Liên Hệ</a>
    </p>
    <p class="lead">
      <a class="btn btn-primary btn-sm" href="{{ route('index') }}" role="button">Tiếp tục xem phòng</a>
    </p>
  </div>

@endsection
