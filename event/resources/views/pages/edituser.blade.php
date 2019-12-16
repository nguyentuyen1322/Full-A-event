@extends('layouts.index')
@section('content')
<main>
        <section class="user">
                @if(!Auth::user() && !isset($loginfb) && !isset($logingg))
                <aside>
                    <figure>
                    <div class="box-img"><img class="ofc" src="images/user/{{Auth::user()->hinh}}" alt=""></div>
                        <figcaption>
                        <h5>{{Auth::user()->name}}</h5>
                        </figcaption>
                    </figure>
                    <ul class="list-item"><a href="{{url('pages/eventcreate')}}">
                            <li class="item">Sự kiện đã tạo</li></a><a href="{{url('pages/infouser')}}">
                            <li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
                            <li class="item">Đăng xuất</li></a>
                    </ul>
                </aside>
                @endif
                @if(Auth::user())
                    <aside>
                        <figure>
                            <div class="box-img"><img class="ofc" src="images/user/{{Auth::user()->hinh}}" alt=""></div>
                            <figcaption>
                            <h5>{{Auth::user()->name}}</h5>
                            </figcaption>
                        </figure>
                        <ul class="list-item"><a href="{{url('pages/eventcreate')}}">
                                <li class="item">Sự kiện đã tạo</li></a><a href="{{ url('pages/infouser') }}">
                                <li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
                                <li class="item">Đăng xuất</li></a>
                        </ul>
                    </aside>
                @endif
                @if(isset($loginfb))
                    <aside>
                        <figure>
                            <div class="box-img"><img class="ofc" src="{{$loginfb->hinh}}" alt=""></div>
                            <figcaption>
                            <h5>{{$loginfb->name}}</h5>
                            </figcaption>
                        </figure>
                        <ul class="list-item"><a href="{{url('pages/eventcreate')}}">
                                <li class="item">Sự kiện đã tạo</li></a><a href="{{ url('pages/infouser') }}">
                                <li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
                                <li class="item">Đăng xuất</li></a>
                        </ul>
                    </aside>
                @endif
                @if(isset($logingg))
                    <aside>
                        <figure>
                            <div class="box-img"><img class="ofc" src="{{$logingg->hinh}}" alt=""></div>
                            <figcaption>
                            <h5>{{$logingg->name}}</h5>
                            </figcaption>
                        </figure>
                        <ul class="list-item"><a href="{{url('pages/eventcreate')}}">
                                <li class="item">Sự kiện đã tạo</li></a><a href="{{ url('pages/infouser') }}">
                                <li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
                                <li class="item">Đăng xuất</li></a>
                        </ul>
                    </aside>
                @endif
            <div class="_main-user">
                <div class="title-catalog wow fadeInLeft" data-wow-delay=".3s" style="position: relative;"><a href="pages/edituser/sua/{{Auth::user()->id}}"><img class="icon" src="./images/icons/add.svg" alt="" srcset=""></a>
                    <div class="name-catalog"><span>A . Event</span><a href="pages/edituser/sua/{{Auth::user()->id}}">
                        @if(!Auth::user() && !isset($loginfb) && !isset($logingg))
                        <h3>Thông tin tài khoản</h3></a></div>
                        @endif
                        @if(Auth::user())
                        <h3>Thông tin tài khoản</h3></a></div>
                        @endif
                        @if(isset($loginfb))
                        <h3>Thông tin tài khoản</h3></a></div>
                        @endif
                        @if(isset($logingg))
                        <h3>Thông tin tài khoản</h3></a></div>
                        @endif
                        <div class="thongbao" style="position: absolute;right: 3rem;">
                            @if(session('thongbao'))
                                <div class="alert alert-success" style="width: 100% !important;text-align: right;float: right;color: #ffd800;">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                        </div>
                </div>
                <div class="list-info-user">
                    <form action="pages/edituser/sua/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="email">Email *</label>
                                <div class="form-input">
                                <input id="email" type="text" name="email" placeholder="Nhập vào email" value="{{$users->email}}">
                                @if($errors->has('email'))
                                    <span class="error">
                                        {{$errors->first('email')}}
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="user-name">Tài khoản *</label>
                                <div class="form-input">
                                    <input id="user-name" type="text" placeholder="Nhập vào tên" name="name" value="{{$users->name}}">
                                    @if($errors->has('name'))
                                        <span class="error">
                                            {{$errors->first('name')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="checkbox" name="changePassword" id="change">
                                <label for="repass">Nhập mật khẩu mới *</label>
                                <div class="form-input">
                                    <input id="repass" class="password" type="password" placeholder="Nhập mật khẩu mới *" name="password" disabled="">
                                    @if($errors->has('password'))
                                        <span class="error">
                                            {{$errors->first('password')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="repass">Nhập lại mật khẩu mới *</label>
                                <div class="form-input">
                                    <input id="repass" class="password" type="password" placeholder="Nhập lại mật khẩu mới *" name="password" disabled="">
                                    @if($errors->has('password'))
                                        <span class="error">
                                            {{$errors->first('password')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="address">Số điện thoại *</label>
                                <div class="form-input">
                                    <input id="address" type="phone" placeholder="Nhập số điện thoại" name="dien_thoai" value="{{$users->dien_thoai}}">
                                    @if($errors->has('dien_thoai'))
                                        <span class="error">
                                            {{$errors->first('dien_thoai')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="address">Địa chỉ</label>
                                <div class="form-input">
                                    <input id="address" type="text" placeholder="Nhập địa chỉ" name="dia_chi" value="{{$users->dia_chi}}">
                                    @if($errors->has('dia_chi'))
                                        <span class="error">
                                            {{$errors->first('dia_chi')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="address">Ngày sinh *</label>
                                <div class="form-input">
                                    <input type="date" name="ngay_sinh" value="{{$users->ngay_sinh}}">
                                    @if($errors->has('ngay_sinh'))
                                        <span class="error">
                                            {{$errors->first('ngay_sinh')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="address">Giới tính *</label>
                                <div class="form-input">
                                    <select id="vip" name="gioi_tinh">
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
                            <div class="form-group col-lg-6">
                                <label class="choose-file" for="file-avatar" style="margin-bottom: 0px !important">Chọn ảnh đại diện</label>
                                <div class="form-input">
                                    <input id="file-avatar" type="file" hidden name="hinh" value="{{$users->hinh}}">
                                    @if($errors->has('hinh'))
                                        <span class="error">
                                            {{$errors->first('hinh')}}
                                        </span>
                                    @endif
                                </div>
                                <p></p>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-input">
                                    <select id="vip" name="vip" value="{{$users->vip}}">
                                        <option value="Normal">Normal</option>
                                        <option value="VIP">VIP</option>
                                    </select>
                                    @if($errors->has('vip'))
                                        <span class="error">
                                            {{$errors->first('vip')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-3"><button class="btn" type="submit">Cập Nhật</button></div>
                        </div>
                    </form>        
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("#change").change(function(){
                if($(this).is(":checked")){
                    $(".password").removeAttr('disabled');
                }else{
                    $(".password").attr('disabled',''); 
                }
            });
        });
    </script>
@endsection