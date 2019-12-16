@extends('admin.layouts.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh Sách Accounts
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
                        <div class="table-responsive">
                            <table class="table table-striped w-auto center">

                                    <!--Table head-->
                                    <thead>
                                    <tr>
                                        <th colspan="2">Thao tác</th>
                                        <th>STT</th>
                                        <th>Email Accounts</th>
                                        <th>Tên Accounts</th>
                                        <th><button id="show" class="btn btn-outline-success" type="button">Check Password</button></th>
                                        <th>Số Điện Thoại</th>
                                        <th>Địa Chỉ</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Hình Accounts</th>
                                        <th>Loại Khách</th>
                                        <th>Phân Quyền</th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->
                                    
                                    <!--Table body-->
                                    <tbody>
                                        @foreach ($user as $use)
                                            <tr class="table-info">
                                                <td> <a href="admin/user/sua/{{$use->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                                </td>
                                                <td>
                                                <a href="admin/user/xoa/{{$use->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                                </td>
                                            <td>{{$use->id}}</td>
                                            <td>{{$use->email}}</td>
                                            <td>{{$use->name}}</td>
                                            <td>
                                             
                                                <textarea class="password" cols="10" rows="2" style="display: none;width: 300px !important;">{{$use->password}}</textarea>
                                            </td>
                                            <td>{{$use->dien_thoai}}</td>
                                            <td><textarea cols="30" rows="2" style="text-align: center">{{$use->dia_chi}}</textarea></td>
                                            <td>{{$use->ngay_sinh}}</td>
                                            <td>{{$use->gioi_tinh}}</td>
                                            <td>
                                                <img src="images/user/{{$use->hinh}}" alt="" width="50" height="50">
                                                <img src="{{$use->hinh}}" alt="" width="50" height="50">
                                            </td>
                                            <td>{{$use->vip}}</td>
                                            <td>{{$use->type}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--Table body-->
                            </table>
                        </div>
                        <!--Table-->
                        {{ $user->links() }}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->  
@endsection