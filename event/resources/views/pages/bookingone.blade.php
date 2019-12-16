@extends('layouts.index')
@section('content')
    <main>
        <section class="booking-step-1">
            <div class="banner-event">
                <figure><img class="ofc" src="./images/product/{{$bookingone->banner}}" alt="" srcset=""></figure>
            </div>
            <nav>
                <div class="container">
                    <ul>
                        <li class="item active"><a href="{{ url('pages/bookingone',$bookingone->id) }}">Chọn vé</a></li>
                        <li class="item"><a href="{{ url('pages/bookingtwo',$bookingone->id) }}">Thanh toán</a></li>
                        <li class="item"><a href="{{ url('pages/bookingthree',$bookingone->id) }}">Hoàn tất</a></li>
                    </ul>
                </div>
            </nav>
            <div class="booking">
                <div class="container">
                <form action="{{ route('postbookingtwo',$bookingone->id) }}" method="post">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="choose-tickets">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>LOẠI VÉ</th>
                                            <th>GIÁ VÉ</th>
                                            <th style="text-align: center">SỐ LƯỢNG <br><span style="font-size: 10px">(CHỈ MUA TỐI ĐA MỖI LOẠI 2 VÉ)</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HẠNG THƯỜNG</td>
                                            <td value="{{$bookingone->gia_ve}}" id="tien_thuong">{{number_format($bookingone->gia_ve)}} VNĐ</td>
                                            <td>
                                                <div class="quantity">
                                                    <input type="number" name="quantity1" id="quantity1" min="0" max="2" step="1" value="0">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HẠNG VIP</td>
                                            <td value="{{$bookingone->gia_ve_vip}}" id="tien_vip">{{number_format($bookingone->gia_ve_vip)}} VNĐ</td>
                                            <td>
                                                <div class="quantity">
                                                    <input type="number" name="quantity2" id="quantity2" min="0" max="2" step="1" value="0">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box-price">
                                <div class="title-box">
                                    <h3>THÔNG TIN ĐẶT VÉ</h3>
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
                                                <div class="loaive">HẠNG THƯỜNG ( Còn {{$bookingone->so_luong_ve_thuong}} vé )</div>
                                                <div class="gia">{{number_format($bookingone->gia_ve)}} VNĐ</div>
                                            </td>
                                            <td>
                                                <div class="soluong" id="quantity3">0</div>
                                                <input type="hidden" id="tien_thuong_value" name="tong_tien_thuong" value="0">
                                                <div class="tonggia" id="tien_thuong_html">0 VNĐ</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="loaive">HẠNG VIP ( Còn {{$bookingone->so_luong_ve_vip}} vé )</div>
                                                <div class="gia" >{{number_format($bookingone->gia_ve_vip)}} VNĐ</div>
                                                <input type="hidden" id="tien_vip_value" name="tong_tien_vip"  value="0">

                                            </td>
                                            <td>
                                                <div class="soluong" id="quantity4">0</div>
                                                <div class="tonggia"  id="tien_vip_html">0 VNĐ</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tổng cộng</td>
                                            <input type="hidden" id="gia_ve_vip_value" name="tong_cong" value="0">

                                            <td id="tong_cong">
                                                0 VNĐ
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><button type="submit" class="btn" >Tiếp tục</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            let multipart2 = 0;
            let multipart = 0;
            $('#quantity1, .quantity-button.quantity-up, .quantity-button.quantity-down').on('click change',function(){
            let quantity1 = $(this).val();
            let tien_thuong = $('#tien_thuong').attr('value');
             multipart2 = tien_thuong * quantity1;
            $('#quantity3').html(quantity1);
            $('#tien_thuong_html').html(multipart2 + ' VNĐ')
            $('#tien_thuong_value').val(multipart2);
        });
            $('#quantity2, .quantity-button.quantity-up, .quantity-button.quantity-down').on('click change',function(){
            let quantity2 = $(this).val();
            let tien_vip = $('#tien_vip').attr('value');
             multipart = tien_vip * quantity2;
            $('#quantity4').html(quantity2);
            $('#tien_vip_html').html(multipart + ' VNĐ');
            $('#tien_vip_value').val(multipart);
        });
        $('#quantity1, #quantity2, .quantity-button.quantity-up, .quantity-button.quantity-down').on('click change',function(){
                let tong_cong = Number(multipart) + Number(multipart2);
                $('#tong_cong').html(tong_cong + ' VNĐ');
                $('#gia_ve_vip_value').val(tong_cong);
            })
        });
    </script>
@endsection
