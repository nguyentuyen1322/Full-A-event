@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Đăng kí Accounts
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thongbao'))
                            <div class="alert alert-success" style="width: 50% !important;">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/user/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Accounts</label>
                                        <input class="form-control" name="email" placeholder="Nhập email accounts" />
                                        @if($errors->has('email'))
                                            <span class="error">
                                                {{$errors->first('email')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên Accounts</label>
                                        <input class="form-control" name="name" placeholder="Nhập tên accounts" />
                                        @if($errors->has('name'))
                                            <span class="error">
                                                {{$errors->first('name')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mật Khẩu Accounts</label>
                                        <input class="form-control" name="password" placeholder="Nhập mật khẩu accounts" />
                                        @if($errors->has('password'))
                                            <span class="error">
                                                {{$errors->first('password')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nhập Lại Mật Khẩu</label>
                                        <input class="form-control" name="password" placeholder="Nhập lại mật khẩu accounts" />
                                        @if($errors->has('password'))
                                            <span class="error">
                                                {{$errors->first('password')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Số Điện Thoại Accounts</label>
                                        <input class="form-control" name="dien_thoai" placeholder="Nhập số điện thoại accounts" />
                                        @if($errors->has('dien_thoai'))
                                            <span class="error">
                                                {{$errors->first('dien_thoai')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Địa Chỉ Accounts</label>
                                        <textarea class="form-control" rows="2" cols="20" name="dia_chi" placeholder="Nhập địa chỉ accounts"></textarea>
                                        @if($errors->has('dia_chi'))
                                            <span class="error">
                                                {{$errors->first('dia_chi')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ngày Sinh Của Accounts</label>
                                        <input class="form-control" type="date" name="ngay_sinh"/>
                                        @if($errors->has('ngay_sinh'))
                                            <span class="error">
                                                {{$errors->first('ngay_sinh')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ảnh Accounts</label>
                                        <input class="form-control" name="hinh" placeholder="Chọn avatar" type="file"/>
                                        @if($errors->has('hinh'))
                                            <span class="error">
                                                {{$errors->first('hinh')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Giới Tính Accounts</label>
                                        <select class="form-control" id="vip" name="gioi_tinh">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                        @if($errors->has('gioi_tinh'))
                                            <span class="error">
                                                {{$errors->first('gioi_tinh')}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Loại Accounts</label>
                                        <select class="form-control" id="vip" name="vip">
                                            <option value="Normal">Normal</option>
                                            <option value="V.I.P">V.I.P</option>
                                        </select>
                                        @if($errors->has('vip'))
                                            <span class="error">
                                                {{$errors->first('vip')}}
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phân quyền Accounts</label>
                                        <select class="form-control" id="vip" name="type">
                                            <option value="2">Admin</option>
                                            <option value="1">User</option>
                                        </select>
                                        @if($errors->has('type'))
                                            <span class="error">
                                                {{$errors->first('type')}}
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">+ THÊM</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper --> 
@endsection