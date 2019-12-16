@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                        <h1 class="page-header">
                            Danh sách sự kiện
                        </h1>
                        </center>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Chờ phê duyệt
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="table-responsive">



                        <!-- /.col-lg-12 -->
                       <!--Table-->
                        <table class="table table-striped w-auto center">

                                <!--Table head-->
                                <thead>
                                <tr>
                                <th colspan="2">Thao tác</th>
                                    <th>STT</th>
                                    <th>Tên sự kiện</th>
                                    <th>Loại sự kiện</th>
                                    <th>Nhà tài trợ</th>
                                    <th>Banner của <br>
                                    sự kiện</th>
                                    <th>Ngày diễn <br>
                                    ra sự kiện</th>
                                    <th>Vị trí <br> vé thường</th>
                                    <th>Quà tặng <br> vé thường</th>
                                    <th>Giá vé</th>
                                    <th>Vị trí <br> vé VIP</th>
                                    <th>Quà tặng <br> vé VIP</th>
                                    <th>Giá vé VIP</th>
                                    <th>Số lượng vé thường</th>
                                    <th>Số lượng vé vip</th>
                                    <th>Nơi diễn ra <br>
                                    sự kiện</th>
                                    <th>Tóm tắt</th>
                                    <th>Mô tả</th>
                                    <th>Email chủ event</th>
                                    <th>Duyệt bài</th>

                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                @foreach($duyet as $duyet)
                                    <tr class="table-info">
                                    <th>
                                        <a href="admin/event/pheduyet/{{$duyet->id}}"><img src="images/accept.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>
                                        <a href="admin/event/xoa/{{$duyet->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>{{$duyet->id}}</th>
                                    <td>{{$duyet->ten_su_kien}}</td>
                                    <td>{{$duyet->type_events->ten_loai}}</td>
                                    <td><img src="images/logo/{{$duyet->logo}}" width="50" height="50"> : {{$duyet->nha_tai_tro}}</td>
                                    <td><img src="images/product/{{$duyet->banner}}" width="120"  height="50"/></td>
                                    <td>{{$duyet->ngay_dien_ra}}</td>
                                    <td>{{$duyet->vi_tri_ve_thuong}}</td>
                                    <td>{{$duyet->qua_tang_thuong}}</td>
                                    <td>{{number_format($duyet->gia_ve)}}</td>
                                    <td>{{$duyet->vi_tri_ve_vip}}</td>
                                    <td>{{$duyet->qua_tang_vip}}</td>
                                    <td>{{number_format($duyet->gia_ve_vip)}}</td>
                                    <td>{{$duyet->so_luong_ve_thuong}}</td>
                                    <td>{{$duyet->so_luong_ve_vip}}</td>
                                    <td>{{$duyet->dia_chi}}</td>
                                    <td>
                                        <textarea cols="5" rows="5"> {{$duyet->tom_tat}}</textarea>
                                    </td>
                                    <td>
                                        <textarea cols="5" rows="5"> {{$duyet->mo_ta}}</textarea>
                                    </td>
                                    <td>{{$duyet->email_chu}}</td>
                                    <td>
                                        @if($duyet->duyet == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>

                                @endforeach


                                </tr>
                                </tbody>
                                <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Đã duyệt
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="table-responsive">



                        <!-- /.col-lg-12 -->
                       <!--Table-->
                    @if(session('thongbao'))
                       <div class="alert alert-success" style="width: 50% !important">
                            {{session('thongbao')}}
                       </div>

                    @endif
                        <table class="table table-striped w-auto center">

                                <!--Table head-->
                                <thead>
                                <tr>
                                <th colspan="2">Thao tác</th>
                                    <th>STT</th>
                                    <th>Tên sự kiện</th>
                                    <th>Loại sự kiện</th>
                                    <th>Nhà tài trợ</th>
                                    <th>Banner của <br>
                                    sự kiện</th>
                                    <th>Ngày diễn <br>
                                    ra sự kiện</th>
                                    <th>Thời gian
                                        <br> diễn ra</th>
                                    <th>Vị trí <br> vé thường</th>
                                    <th>Quà tặng <br> vé thường</th>
                                    <th>Giá vé thường</th>
                                    <th>Vị trí <br> vé VIP</th>
                                    <th>Quà tặng <br> vé VIP</th>
                                    <th>Giá vé VIP</th>
                                    <th>Số lượng vé thường</th>
                                    <th>Số lượng vé vip</th>
                                    <th>Nơi diễn ra <br>
                                    sự kiện</th>
                                    <th>Tóm tắt</th>
                                    <th>Mô tả</th>
                                    <th>Email chủ event</th>
                                    <th>Hiển thị trên <br>
                                    Slider trang chủ</th>
                                    <th>Hiển thị trên <br>
                                    sự kiện nổi bật</th>
                                    <th>Duyệt bài</th>

                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                <?php $events = $event; ?>
                                @foreach($event as $event)
                                <tr class="table-info">
                                <th>
                                       <a href="admin/event/sua/{{$event->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>
                                        <a href="admin/event/xoa/{{$event->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>{{$event->id}}</th>
                                    <td>{{$event->ten_su_kien}}</td>
                                    <td>{{$event->type_events->ten_loai}}</td>
                                    <td><img src="images/logo/{{$event->logo}}" width="50" height="50">: {{$event->nha_tai_tro}}</td>
                                    <td><img src="images/product/{{$event->banner}}" width="120"  height="50"/></td>
                                    <td>{{$event->ngay_dien_ra}}</td>
                                    <td>{{$event->thoi_gian}}</td>
                                    <td>{{$event->vi_tri_ve_thuong}}</td>
                                    <td>{{$event->qua_tang_thuong}}</td>
                                    <td>{{number_format($event->gia_ve)}} VNĐ</td>
                                    <td>{{$event->vi_tri_ve_vip}}</td>
                                    <td>{{$event->qua_tang_vip}}</td>
                                    <td>{{number_format($event->gia_ve_vip)}} VNĐ</td>
                                    <td>{{$event->so_luong_ve_thuong}}</td>
                                    <td>{{$event->so_luong_ve_vip}}</td>
                                    <td>{{$event->dia_chi}}</td>
                                    <td>
                                        <textarea cols="30" rows="3" style="text-align: center !important">{{$event->tom_tat}}</textarea>
                                    </td>
                                    <td>
                                        <textarea cols="30" rows="3" style="text-align: center !important">{{$event->mo_ta}}</textarea>
                                    </td>
                                    <td>
                                        <textarea cols="30" rows="3" style="text-align: center !important">{{$event->email_chu}}</textarea>
                                    </td>
                                    <td>
                                        @if($event->hien_thi_slider == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($event->hien_thi_noi_bat == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($event->duyet == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>


                                </tr>
                                @endforeach
                                </tbody>
                                <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                    {{ $events->links() }}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection
