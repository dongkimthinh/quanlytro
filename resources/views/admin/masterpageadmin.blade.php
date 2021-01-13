<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý trọ - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('public/img/logo1.gif') }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('public/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('public/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{ asset('public/admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('public/admin/css/sanh.css') }}" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>

<body id="page-top">
@if(session()->has('admin'))
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.commonadmin.sidebarleftadmin')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.commonadmin.navigationbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.commonadmin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@else
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="{{ route('loginadmin') }}">&larr; Back to Dashboard</a>
    </div>

</div>
@endif
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $("#possible").on('click',function(){
                var result           = "";
                var characters       = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                var charactersLength = characters.length;
                    for ( var i=0; i < 10; i++ ) {
                        result += characters.charAt(Math.floor(Math.random() * charactersLength));
                    }
                {{--  return result;  --}}
                $("#magiamgia").val(result);
                {{--  console.log(result);  --}}
            });

        });
    </script>
    <script>
        function isNumberKey(evt,e){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            if($('#soluong'+e).val()==0){
                $('#soluong'+e).val(1);
            }

            return true;
        }
    </script>
    <script>
        function isNumberKey1(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            if($('#soluong').val()==0){
                $('#soluong').val(1);
            }

            return true;
        }
    </script>
    <script>
        $(document).ready(function() {
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
                var chonngay = $(this).val();
                var chonngay = $('#chonngay').val();
                if(chonngay==1){
                    $('#homnay').val(today);
                }
                {{-- console.log(chonngay); --}}


                var trangthai = $('#settrangthai').val();
                $('#trangthai').val(trangthai);
                {{-- console.log(trangthai); --}}
                
            $('#chonngay').on('change',function(){
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
                var chonngay = $(this).val();
                {{-- console.log(chonngay); --}}
                if(chonngay==1){
                    $('#homnay').val(today);
                } elseif(chonngay==2){

                }
            });
            $('#settrangthai').on('change',function(){
                var trangthai = $(this).val();
                console.log(trangthai);
                {{-- if(chonngay==1){
                    $('#homnay').val(today);
                } --}}
                $('#trangthai').val(trangthai);
            });
        });
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('public/admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('public/admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('public/admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('public/admin/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('public/admin/js/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('public/admin/js/demo/datatables-demo.js') }}"></script>

    <script src="{{ asset('public/js/contract.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
</body>

</html>
