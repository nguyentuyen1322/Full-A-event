@extends('layouts.index')
@section('content')
    <main>
        <section class="booking-step-1">
            <div class="banner-event">
                <figure><img class="ofc" src="./images/product/{{$bookingtwo->banner}}" alt="event"></figure>
            </div>
            <nav>
                <div class="container">
                    <ul>
                        <li class="item"><a href="{{ url('pages/bookingone',$bookingtwo->id) }}">Chọn vé</a></li>
                        <li class="item"><a href="{{ url('pages/bookingtwo',$bookingtwo->id) }}">Thanh toán</a></li>
                        <li class="item active"><a href="{{ url('pages/bookingthree',$bookingtwo->id) }}">Hoàn tất</a></li>
                    </ul>
                </div>
            </nav>
            @if(isset($thanhcong))
            <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" style="width: 100%; background-color: #ffd800; padding: 100px; margin: 0;height: 100%;
                        text-align: center; font-size: 48px; font-family: Anton,sans-serif;color: #000"> 
                             {{$thanhcong}} 
                        </div>
                    </div>
                </div>
        @endif
            @if(isset($err))
            <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" style="width: 100%; background-color: #ffd800; padding: 100px; margin: 0;height: 100%;
                        text-align: center; font-size: 48px; font-family: Anton,sans-serif;color: #000"> 
                             {{$err}} 
                        </div>
                    </div>
                </div>
        @endif  

        </section>
    </main>

@endsection
