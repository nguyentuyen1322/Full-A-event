@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">

                    <div class="col-lg-12" style=" padding: 0px">
                        <div class="form-group">
                                @if(session('loi'))
                                    <div class="alert alert-danger">
                                        {{session('loi')}}
                                    </div>
                                @endif

                                    <p>
                                    <img width="" style="max-width: 100%;" src="images/product/{{$duyet->banner}}">
                                    </p>
                                    <!-- <p>{{$duyet->banner}}</p> -->
                            </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table witdh="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="100%">
                                        <h1 class="page-header">
                                        {{$duyet->ten_su_kien}}
                                        </h1>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                    @if(session('thongbao'))
                        <div class="alert alert-success" style="width: 50% !important">
                            {{session('thongbao')}}
                        </div>
                    @endif
                            <table width="30%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                    <img width="50px" height="50" src="images/logo/{{$duyet->logo}}" >
                                    </td>
                                    <td>
                                    {{$duyet->nha_tai_tro}} tài trợ sự kiện.
                                    </td>

                                </tr>
                            </table>


                        <form action="admin/event/pheduyet/{{$duyet->id}}" method="POST" enctype="multipart/form-data" >
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">


                            <div class="row" style="margin-top: 20px">

                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Email chủ sự kiện:</label>
                                        {{$duyet->email_chu}}
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Thể loại sự kiện</label>
                                        <select class="form-control" name="id_loai" readonly>
                                                @foreach($danhmuc as $danhmuc)

                                                    <option class="form-control"
                                                            @if( $duyet->id_loai == $danhmuc->id )
                                                                {{"selected"}}
                                                            @endif

                                                    value="{{$danhmuc->id}}" readonly>{{$danhmuc->ten_loai}}</option>

                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nơi diễn ra sự kiện</label>
                                        <input class="form-control" value="{{$duyet->dia_chi}}" name="dia_chi" type="text" readonly/>
                                    </div>
                                </div>

                            </div>


                        <div class="row" style="margin-top: 20px">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ngày diễn ra sự kiện</label>
                                        <input class="form-control" name="ngay_dien_ra" value="{{$duyet->ngay_dien_ra}}" type="date" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Giờ diễn ra sự kiện</label>
                                        <input class="form-control" name="thoi_gian" value="{{$duyet->thoi_gian}}" type="time" readonly/>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-6" style="text-align: center;font-weight: bold; color: #337ab7; text-transform: uppercase; font-size: 20px">
                                    Thông tin vé thường
                                </div>
                                <div class="col-md-6" style="text-align: center;font-weight: bold; color: #337ab7; text-transform: uppercase; font-size: 20px">
                                    Thông tin vé VIP
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Số lượng vé thường</label>
                                        <input class="form-control" name="so_luong_ve_thuong" value="{{$duyet->so_luong_ve_thuong}}" type="text" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Số lượng vé VIP</label>
                                        <input class="form-control" name="so_luong_ve_vip" value="{{$duyet->so_luong_ve_vip}}" type="text" readonly/>
                                    </div>
                                </div>

                            </div>
                            <div class="row" style="margin-top: 20px">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Giá vé thường</label>
                                        <input class="form-control" name="gia_ve" value="{{$duyet->gia_ve}}" type="text" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Giá vé VIP</label>
                                        <input class="form-control" name="gia_ve_vip" value="{{$duyet->gia_ve_vip}}" type="text" readonly/>
                                    </div>
                                </div>

                            </div>
                            <div class="row" style="margin-top: 20px">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Vị trí ngồi vé thường</label>
                                        <input class="form-control" name="vi_tri_ngoi_thuong" value="{{$duyet->vi_tri_ve_thuong}}" type="text" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Vị trí ngồi vé VIP</label>
                                        <input class="form-control" name="vi_tri_ngoi_vip" value="{{$duyet->vi_tri_ve_vip}}" type="text" readonly/>
                                    </div>
                                </div>

                            </div>
                            <div class="row" style="margin-top: 20px">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Quà tặng khi mua vé thường</label>
                                        <input class="form-control" name="qua_tang_thuong" value="{{$duyet->qua_tang_thuong}}" type="text" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Quà tặng khi mua vé VIP</label>
                                        <input class="form-control" name="qua_tang_vip" value="{{$duyet->qua_tang_vip}}" type="text" readonly/>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group" style="width: 100%">
                                <label>Tóm tắt sự kiện ( Hiển thị trên Slider, Sự kiện nổi bật)</label>
                                <textarea class="form-control" id="editor1" rows="2" cols="20" value="" name="tom_tat" readonly>{{$duyet->tom_tat}}</textarea>
                            </div>
                            <div class="form-group" style="width: 100%">
                                <label>Mô tả sự kiện</label>
                                <textarea class="form-control ckeditor" id="editor1" srows="7" cols="20" name="mo_ta" value="" readonly>{{$duyet->mo_ta}}</textarea>
                            </div>



                            <div class="form-group">
                                <label>Hiển thị sự kiện trên Slider </label>
                                <label class="radio-inline">

                                <input name="hien_thi_slider" value="0" type="radio"
                                @if($duyet->hien_thi_slider ==0)
                                    {{"checked"}}
                                    @endif
                                            >Không


                                </label>
                                <label class="radio-inline">
                                <input name="hien_thi_slider"
                                @if($duyet->hien_thi_slider ==1)
                                    {{"checked"}}
                                    @endif
                                    value="1" type="radio" >Có
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Hiển thị sự kiện nổi bật </label>
                                <label class="radio-inline">
                                <input name="hien_thi_noi_bat" value="0" type="radio"
                                @if($duyet->hien_thi_noi_bat ==0)
                                    {{"checked"}}
                                    @endif

                                >Không
                                </label>
                                <label class="radio-inline">
                                <input name="hien_thi_noi_bat" value="1"
                                @if($duyet->hien_thi_noi_bat ==1)
                                    {{"checked"}}
                                    @endif
                                type="radio" >Có
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Duyệt bài </label>
                                <label class="radio-inline">
                                <input name="duyet" value="0" type="radio"
                                @if($duyet->duyet ==0)
                                    {{"checked"}}
                                    @endif
                                 checked="">Không
                                </label>
                                <label class="radio-inline">
                                <input name="duyet" value="1"
                                @if($duyet->duyet ==1)
                                    {{"checked"}}
                                    @endif
                                type="radio" >Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">DUYỆT BÀI</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<script>
    // ClassicEditor
    //     .create( document.querySelector( '#editor' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
    // ClassicEditor
    //     .create( document.querySelector( '#editor1' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
    CKEDITOR.replace('editor1');
</script>
@endsection
