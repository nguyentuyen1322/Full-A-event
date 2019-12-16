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
                        <li class="item active"><a href="{{ url('pages/bookingtwo',$bookingtwo->id) }}">Thanh toán</a></li>
                        <li class="item"><a href="{{ url('pages/bookingthree',$bookingtwo->id) }}">Hoàn tất</a></li>
                    </ul>
                </div>
            </nav>
            @if(isset($bookingtwo->so_luong_ve_thuong)>=isset($quantity1) && isset($bookingtwo->so_luong_ve_vip)>=isset($quantity2))

            @if(session('thongbao'))
                <div class="alert alert-success" style="width: 50% !important; color: #000 !important">
                        {{session('thongbao')}}   
                </div>
            @endif

            @if(isset($quantity1) || count($errors) > 0)
            <div class="booking">
                <div class="container">
                    <form action="{{ route('postBookingthree',$bookingtwo->id) }}" method="POST" id="validate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="buyer-info">
                                    <div class="title-box">
                                        <h3>Thông tin người nhận vé</h3>
                                    </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label for="firstname">Họ và Tên*</label>
                                                <input id="firstname" type="text" name="ten_nguoi_mua" placeholder="Nhập họ của bạn" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="email">Email*</label>
                                                <input id="email" type="text" name="email" placeholder="Nhập địa chỉ email nhận vé" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="emailagain">Nhập lại Email*</label>
                                                <input id="emailagain" type="text" name="email" placeholder="Nhập lại Email" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="phone">Số điện thoại*</label>
                                                <input id="phone" type="text" name="phone" placeholder="Nhập số điện thoại" required>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box-price">
                                    <div class="title-box">
                                        <h3>THÔNG TIN ĐẶT VÉ</h3><a href="{{ url('pages/bookingone',$bookingtwo->id) }}">Sửa</a>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Loại vé</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="loaive">Hạng Thường</div>
                                                    <div class="gia">{{$bookingtwo->gia_ve}}</div>
                                                </td>
                                                <td>
                                                    <div class="soluong">{{$quantity1}}</div>
                                                    <input type="hidden" name="sl_ve_thuong" min="0" max="9" step="1" value="{{$quantity1}}">
                                                    <div class="tonggia">{{$tong_tien_thuong}}</div>
                                                    <input type="hidden" name="tong_tien_ve_thuong" min="0" max="9" step="1" value="{{$tong_tien_thuong}}">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="loaive">Hạng Vip</div>
                                                    <div class="gia">{{$bookingtwo->gia_ve}}</div>
                                                </td>
                                                <td>
                                                    <div class="soluong">{{$quantity2}}</div>
                                                    <input type="hidden" name="sl_ve_vip" min="0" max="9" step="1" value="{{$quantity2}}">
                                                    <div class="tonggia">{{$tong_tien_vip}}</div>
                                                    <input type="hidden" name="tong_tien_ve_vip" min="0" max="9" step="1" value="{{$tong_tien_vip}}">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tổng cộng</td>
                                                <td>{{$tong_cong}}</td>
                                                <input type="hidden" name="tong_tien" min="0" max="9" step="1" value="{{$tong_cong}}">
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn" type="submit">Hoàn tất</button>
                                </div>
                            </div>
                        </div>
                </form>
                </div>
            </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" style="width: 100%; background-color: #ffd800; padding: 100px; margin: 0;height: 100%;
                        text-align: center; font-size: 48px; font-family: Anton,sans-serif;color: #000"> 
                            Bạn chưa chọn vé
                        </div>
                    </div>
                </div>
            @endif
            @else
        <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" style="width: 100%; background-color: #ffd800; padding: 100px; margin: 0;height: 100%;
                        text-align: center; font-size: 48px; font-family: Anton,sans-serif;color: #000">
                            @if($bookingtwo->so_luong_ve_thuong<=0)
                            Hết vé thường
                            @endif
                            @if($bookingtwo->so_luong_ve_vip<=0)
                            Hết vé vip
                            @endif
                        </div>
                    </div>
                </div>
        @endif
        </section>
    </main>

@endsection
