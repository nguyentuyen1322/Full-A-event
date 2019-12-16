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
                                    <li class="item">Sự kiện đã tạo</li></a><a href="{{ url('pages/infouser') }}">
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
                <div class="title-catalog wow fadeInLeft" data-wow-delay=".3s"><a href="{{url('pages/eventcreate')}}"><img class="icon" src="./images/icons/add.svg" alt="" srcset=""></a>
                    <div class="name-catalog"><span>A . Event</span><a href="{{url('pages/eventcreate')}}">
                            <h3>Các sự kiện đã tạo</h3></a></div>
                </div>
                <div class="row list-sk-da-tao">
                    @foreach ($eventcreate as $eventcreates)
                    <div class="col-lg-6">
                            <div class="item-event">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/product/{{$eventcreates->banner}}" alt="" srcset=""></div>
                                    <figcaption>
                                    <h3>{{$eventcreates->ten_su_kien}}</h3>
                                        <div class="info-event">
                                            <div class="item">
                                                <h5>Từ:<span>{{number_format($eventcreates->gia_ve)}} VND</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Địa chỉ:<span>{{$eventcreates->dia_chi}}</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Thời gian:<span>{{$eventcreates->ngay_dien_ra}}</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Trạng thái:<span>Mở bán</span></h5>
                                            </div>
                                        </div>
                                    </figcaption>
                                    <div class="list-task">
                                        <div class="item"><a href="pages/editevent/sua/{{$eventcreates->id}}">Sửa</a></div>
                                        <div class="item"><a href="pages/eventcreate/xoa/{{$eventcreates->id}}">Xóa</a></div>
                                    </div>
                                </figure>
                            </div>
                        </div> 
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection