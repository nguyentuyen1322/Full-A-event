@extends('layouts.index')
@section('content')
<main>
    <section class="search">
        <form action="pages/search" method="POST" autocomplete="off">
            @csrf
            <div class="form-group">
                <label class="content wow fadeInUp" for="search" data-wow-delay=".3s"><button class="btn" hidden type="submit" style="letter-spacing: 1px !important;border-radius: 10px !important;line-height: 40px;font-family: K2D,sans-serif;font-weight: bold;">Tìm kiếm</button></label>
                <input id="search" type="text" name="tukhoa" placeholder="Nhập tìm kiếm..." autocomplete="off">
               
            </div>
        </form>
        <div class="ket-qua-tim-kiem">
            <div class="container">
                <div class="so-luong-ket-qua">
                    <p>Kết quả tìm kiếm:<span>
                        @if (isset($sreach))
                            <?=count($sreach)?>
                        @else
                            0 
                        @endif
                    </span></p>
                </div>
                <div class="row">
                    @if(isset($sreach))
                    @foreach ($sreach as $timkiem)
                    <div class="col-lg-4"><a href="{{url('pages/chitiet',$timkiem->id)}}">
                            <div class="item-event">
                                <figure>
                                    <div class="box-img"><img class="ofc" src="images/product/{{$timkiem->banner}}" alt="" srcset=""></div>
                                    <figcaption>
                                        <h3>{{$timkiem ->ten_su_kien}}</h3>
                                        <div class="info-event">
                                            <div class="item">
                                                <h5>Từ:<span>{{$timkiem->gia_ve}} VND</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Địa chỉ:<span>{{$timkiem->dia_chi}}</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Thời gian:<span>{{$timkiem->ngay_dien_ra}}</span></h5>
                                            </div>
                                            <div class="item">
                                                <h5>Trạng thái:<span>Mở bán</span></h5>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>
                    @endforeach
                   @endif
                   
      
                </div>
            </div>
        </div>
    </section>
</main>
@endsection