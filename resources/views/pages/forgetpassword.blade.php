<!DOCTYPE html>
<html>
<head>
    <title>Tìm Lại Mật Khẩu</title>
</head>
<body>
    <p>Mã Xác Thực Của Bạn là:{{ $details['phone_code'] }}</p>
    <p>Mời bạn click vào link này để xác nhận lại mật khẩu:<a href="{{ $details['url'] }}">{{ $details['url'] }}</a>(hiệu lực trong 5p)</p>
    {{--  <p>Số Điện Thoại:{{ $details['sdt'] }}</p>  --}}
    <p>Cảm Ơn</p>
</body>
</html>
