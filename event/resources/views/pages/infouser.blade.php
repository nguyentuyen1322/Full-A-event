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
            <div class="title-catalog wow fadeInLeft" data-wow-delay=".3s"><a href="{{url('pages/infouser')}}"><img class="icon" src="./images/icons/add.svg" alt="" srcset=""></a>
                <div class="name-catalog"><span>A . Event</span><a href="{{url('pages/infouser')}}">
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
            </div>
            @if(!Auth::user() && !isset($loginfb) && !isset($logingg))
            <div class="list-info-user">
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <label for="user-name">Tài khoản</label>
                        <div class="form-input">
                            <input id="user-name" type="text" value="{{$Auth::user()->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="email">Email *</label>
                        <div class="form-input">
                            <input id="email" type="text" readonly value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="address">Số điện thoại *</label>
                        <div class="form-input">
                            <input type="phone" value="{{Auth::user()->dien_thoai}}">
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="address">Địa chỉ</label>
                        <div class="form-input">
                            <input id="address" type="text" value="{{Auth::user()->dia_chi}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="address">Ngày sinh *</label>
                        <div class="form-input">
                            <input type="date" value="{{Auth::user()->ngay_sinh}}" readonly>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="address">Giới tính *</label>
                        <div class="form-input">
                            <label>{{Auth::user()->gioi_tinh}}</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-3"><a class="btn" href="pages/edituser/sua/{{Auth::user()->id}}">Sửa</a></div>
                </div>
            </div>
            @endif
            @if(Auth::user())
            <div class="list-info-user">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="user-name">Tài khoản</label>
                            <div class="form-input">
                                    <input id="user-name" type="hidden" value="{{Auth::user()->id}}" readonly>
                                <input id="user-name" type="text" value="{{Auth::user()->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="email">Email *</label>
                            <div class="form-input">
                                <input id="email" type="text" readonly value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="address">Số điện thoại *</label>
                            <div class="form-input">
                                <input type="phone" value="{{Auth::user()->dien_thoai}}">
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="address">Địa chỉ</label>
                            <div class="form-input">
                                <input id="address" type="text" value="{{Auth::user()->dia_chi}}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="address">Ngày sinh *</label>
                            <div class="form-input">
                                <input type="date" value="{{Auth::user()->ngay_sinh}}" readonly>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="address">Giới tính *</label>
                            <div class="form-input">
                                <label>{{Auth::user()->gioi_tinh}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-lg-3"><a class="btn" href="pages/edituser/sua/{{Auth::user()->id}}">Sửa</a></div>
                    </div>
                </div>
            @endif
            @if(isset($loginfb))
            <div class="list-info-user">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="user-name">Tài khoản</label>
                            <div class="form-input">
                                <input id="user-name" type="text" value="{{$loginfb->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="email">Hình Ảnh *</label>
                            <div class="form-input">
                                <img src="{{$loginfb->hinh}}" alt="" srcset="" width="100" height="100" style="border-radius: 50%;border: 2px solid #ffd800;">
                            </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-lg-3"><a class="btn" href="pages/edituser/sua/{{$loginfb->id}}">Sửa</a></div>
                    </div>
                </div>
            @endif
            @if(isset($logingg))
            <div class="list-info-user">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="user-name">Tài khoản</label>
                            <div class="form-input">
                                <input id="user-name" type="text" value="{{$logingg->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="email">Hình Ảnh *</label>
                            <div class="form-input">
                                <img src="{{$logingg->hinh}}" alt="" srcset="" width="100" height="100" style="border-radius: 50%;border: 2px solid #ffd800;">
                            </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-lg-3"><a class="btn" href="pages/edituser/sua/{{$logingg->id}}">Sửa</a></div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection