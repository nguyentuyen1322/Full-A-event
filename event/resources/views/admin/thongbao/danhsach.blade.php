@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách Bills
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        @if(session('thongbao'))
                            <div class="alert alert-success" style="width: 50% !important;">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <!-- /.col-lg-12 -->
                       <!--Table-->
                       <div class="table-responsive">
                            <table class="table table-striped w-auto center">

                                    <!--Table head-->
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Email khách hàng</th>
                                        <th>SL vé thường</th>
                                        <th>Tổng tiền vé thường</th>
                                        <th>SL vé vip</th>
                                        <th>Tổng tiền vé vip</th>
                                        <th>Tổng tiền</th>
                                        <th>Ngày tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>
                                        @foreach ($bills as $book)
                                            <tr class="table-info">
                                            <td>{{$book->id}}</td>
                                            <td>{{$book->ten_nguoi_mua}}</td>
                                            <td>{{$book->phone}}</td>
                                            <td>{{$book->email}}</td>
                                            <td>{{$book->sl_ve_thuong}}</td>
                                            <td>{{$book->tong_tien_ve_thuong}}</td>
                                            <td>{{$book->sl_ve_vip}}</td>
                                            <td>{{$book->tong_tien_ve_vip}}</td>
                                            <td>{{$book->tong_tien}}</td>
                                            <td>{{$book->updated_at}}</td>
                                            <td>
                                                <a href="admin/booking/xoa/{{$book->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--Table body-->
                            </table>
                        </div>
                        <!--Table-->
                        {{ $bills->links() }}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
   
@endsection
