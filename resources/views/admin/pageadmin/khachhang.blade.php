@extends('admin.masterpageadmin')
@section('title')
    Thông Tin
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Thông Tin Khách Đã Đăng Ký Tài Khoản</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Thông Tin</li>
                    <li class="breadcrumb-item active" aria-current="page">Danh Sách Thông Tin</li>
                  </ol>
                </div>
                  <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @if (session('message'))
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ session('message') }}</h6>
                </div>
            @endif
            @if(session('thongbao'))
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ session('thongbao') }}</h6>
                </div>
            @endif
            {{--  @error('anh')
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $message }}</h6>
                </div>
            @enderror  --}}

            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                    class="btn btn-success fa-pull-right btn-sm"><i class="fas fa-plus"></i></a></h6>
            </div> --}}
            {{-- //table-responsive --}}
            <div class="card-body" style="zoom: 80%">
                <div class="table table-striped">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 0.1%">STT</th>
                                <th class="text-center">Tên Tài Khoản</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center" >Email</th>
                                <th class="text-center">Giới tính</th>
                                {{-- <th>Salary</th> --}}
                                <th class="text-center" style="width: auto">Hành động</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Tên Tài Khoản</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Giới tính</th>
                                {{-- <th>Salary</th> --}}
                                <th class="text-center" style="width: 9%">Hành động</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $stt= 0 ?>
                            @foreach ($khachhang as $kh)
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @for ($i=1; $i <= count($khachhang);$i++)
                                           {{ $stt=$stt+1 }}
                                                @break;
                                        @endfor
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $kh -> ten_tk}}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $kh -> tenkh}}</td>
                                    @php
                                        $phone = str_replace(" ", "", $kh->sdt_kh);
                                        if(strlen($phone)==10){
                                            $kq = substr($phone, 0, 4) . " " . substr($phone, 4, 3) . " " . substr($phone, 7, 3);
                                        } else{
                                            $kq = substr($phone, 0, 3) . " " . substr($phone, 3, 3) . " " . substr($phone, 6, 3). " " . substr($phone, 9, 2);
                                        }
                                    @endphp
                                    <td class="text-center" style="vertical-align: middle;">{{ $kq }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $kh-> email_kh }}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $kh -> gioitinh }}</td>
                                    <td class="text-center" style="vertical-align: middle">
                                        <form action="{{ route('khachhangdelete',$kh->id_kh) }}" method="GET">
                                            @csrf
                                        <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{ $kh -> id_kh }}"><i class="fas fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>$470,600</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>$313,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>$385,750</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>$198,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>$725,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>$237,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>$217,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>$345,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>$675,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>$645,750</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>$234,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                                <td class="text-center">

                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                                <td class="text-center">

                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                                <td class="text-center">

                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                                <td class="text-center">

                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="needs-validation" action="{{ route('roomadminpost') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="modal-body">
                            <div class="col-lg-12 text-center">
                                <h2>Thêm Phòng Mới</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tên Phòng</label>
                                        <input class="form-control" name="tenphong" id="validationCustom01" type="text" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input class="form-control" name="gia" id="validationCustom02" type="number" required>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Diện Tích</label>
                                        <input class="form-control" name="dientich" id="validationCustom03" type="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><span>Ảnh</span></label>
                                        {{-- <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div> --}}
                                        <input class="form-control" type="file" id="validationCustom05" name="anh" required>
                                        @error('anh')
                                            <div class="valid-feedback" for = "validationCustom05">
                                                <h6 class="m-0 font-weight-bold text-primary">{{ $message }}</h6>
                                            </div>
                                        @enderror


                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" name="mota"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        @foreach($khachhang as $kh)
        <div class="modal fade" id="exampleModalCenter{{ $kh -> id_kh }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Quản lý trọ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('editkhachhangadmin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-lg-12 text-center">
                            <h2>Sửa Khách Hàng</h2>
                        </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Tên Khách Hàng</label>
                                <input name="idkh" value="{{ $kh -> id_kh }}" style="display: none">
                                <input class="form-control" name="tenkh" type="text" required value="{{ $kh -> tenkh }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" type="text" required value="{{ $kh -> email_kh }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control" name="sdt" type="number" required value="{{ $kh -> sdt_kh }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Giới Tính</label>
                                {{-- <input class="form-control" name="gioitinh" type="" required value="{{ $kh -> gioitinh }}"> --}}

                            <select class="form-control" id="guest" name="gioitinh">
                                @if($kh -> gioitinh == 'Nam')
                                <option value="Nam" selected>Nam</option>
                                <option value="Nữ">Nữ</option>
                                @else
                                <option value="Nam">Nam</option>
                                <option value="Nữ" selected>Nữ</option>
                                @endif
                            </select>
                        </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="form-group">
                                <label><span>Ảnh</span></label>
                                <div class="custom-file">
                                    <input class="form-control" type="file" name="anh" id="customFile" value="{{ $ph1 -> hinh_phong }}" required>

                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-12">
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="mota" value="">{{ $ph1 -> mota }}</textarea>

                            </div>
                        </div> --}}
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
        @endforeach

    </div>
@endsection
