@extends('layouts.index')
@section('content')
<main>
    <section class="form-add-event">
        {{-- @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif --}}
        <div class="form-info-event" style="padding-top: 0px;">
        <form action="pages/editevent/sua/{{$edit_events->id}}" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="main-banner content wow fadeInDown" data-wow-delay=".2s">
                <div class="form-input">
                    <figure class="button-choose-file"><img class="ofc" src="images/form-add-event/main-banner.jpg" alt="aevent">
                        <figcaption>
                            <h3>Tải ảnh bìa lên</h3>
                            <p>Kích thước tối ưu:</p>
                            <p>1440 x 600px (không lớn hơn 2MB)</p><svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M19,7h-0.4c-0.4,0-0.7-0.2-0.9-0.6l-1.2-2.3c-0.3-0.7-1-1.1-1.8-1.1H9.2C8.5,3,7.8,3.4,7.4,4.1L6.3,6.4   C6.1,6.8,5.8,7,5.4,7H5c-2.2,0-4,1.8-4,4v6c0,2.2,1.8,4,4,4h14c2.2,0,4-1.8,4-4v-6C23,8.8,21.2,7,19,7z M12,17c-2.2,0-4-1.8-4-4   c0-2.2,1.8-4,4-4s4,1.8,4,4C16,15.2,14.2,17,12,17z" id="photo"/></g></svg>
                        </figcaption>
                    </figure>
                <input class="file-img" name="banner" type="file" hidden value="{{$edit_events->banner}}">
                    @if($errors->has('banner'))
                        <span class="error" style="text-align: center !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                            {{$errors->first('banner')}}
                        </span>
                    @endif
                </div>
            </div>

                <div class="form-row" style="padding-top: 50px">
                    <div class="form-group col-lg-12">
                        <label class="big-title" for="ten-su-kien">Tên sự kiện:</label>
                        <div class="form-input">
                            <input class="big-input" id="ten-su-kien" type="text" name="ten_su_kien" placeholder="Nhập tên sự kiện" value="{{$edit_events->ten_su_kien}}">
                            @if($errors->has('ten_su_kien'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('ten_su_kien')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="dia-diem">Tên địa điểm:</label>
                        <div class="form-input">
                            <input id="dia-diem" type="text" name="dia_chi" placeholder="Nhập địa điểm diễn ra sự kiện" value="{{$edit_events->dia_chi}}">
                        </div>
                        <div class="form-row margin-5px">
                            @if($errors->has('dia_chi'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('dia_chi')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <div class="title-input">Logo nhà tài trợ sự kiện</div>
                        <div class="form-input add-img-small">
                            <figure class="button-choose-file"><img class="ofc" src="images/icons/default-logo-organizer.png" alt=""></figure>
                            <input class="file-img" type="file" name="logo" hidden value="{{$edit_events->logo}}">
                            @if($errors->has('logo'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('logo')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="loai-su-kien">Chọn loại sự kiện</label>
                        <div class="form-input">
                            <select id="loai-su-kien" name="id_loai">
                                @foreach($danhmuc as $danhmuc)
                                <option value="{{$danhmuc->id}}">-- {{$danhmuc->ten_loai}} --</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('ten_loai'))
                            <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                {{$errors->first('ten_loai')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="dia-diem">Nhà tài trợ:</label>
                        <div class="form-input">
                            <input id="dia-diem" type="text" name="nha_tai_tro" placeholder="Nhập tên nhà tài trợ" value="{{$edit_events->nha_tai_tro}}">
                        </div>
                        <div class="form-row margin-5px">
                            @if($errors->has('nha_tai_tro'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('nha_tai_tro')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Số lượng vé thường</label>
                        <div class="form-input">
                            <input type="number" name="so_luong_ve_thuong"  placeholder="Nhập số lượng" value="{{$edit_events->so_luong_ve_thuong}}">
                            @if($errors->has('so_luong_ve_thuong'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('so_luong_ve_thuong')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Giá vé Thường</label>
                        <div class="form-input">
                            <input type="number" name="gia_ve" placeholder="Nhập giá vé loại thường" value="{{$edit_events->gia_ve}}">
                            @if($errors->has('gia_ve'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('gia_ve')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Số lượng vé vip</label>
                        <div class="form-input">
                            <input type="number" name="so_luong_ve_vip"  placeholder="Nhập số lượng" value="{{$edit_events->so_luong_ve_vip}}">
                            @if($errors->has('so_luong_ve_vip'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('so_luong_ve_vip')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Giá vé VIP</label>
                        <div class="form-input">
                            <input type="number" name="gia_ve_vip" placeholder="Nhập giá vé loại vip" value="{{$edit_events->gia_ve_vip}}">
                            @if($errors->has('gia_ve_vip'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('gia_ve_vip')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Vị trí ngồi thường</label>
                        <div class="form-input">
                            <input type="text" name="vi_tri_ve_thuong"  placeholder="Vị trí ngồi thường" value="{{$edit_events->vi_tri_ve_thuong}}">
                            @if($errors->has('vi_tri_ve_thuong'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('vi_tri_ve_thuong')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Vị trí ngồi VIP</label>
                        <div class="form-input">
                            <input type="text" name="vi_tri_ve_vip" placeholder="Vị trí ngồi VIP" value="{{$edit_events->vi_tri_ve_vip}}">
                            @if($errors->has('vi_tri_ve_vip'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('vi_tri_ve_vip')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Quà tặng khi mua vé thường</label>
                        <div class="form-input">
                            <input type="text" name="qua_tang_thuong"  placeholder="Quà tặng khi mua vé thường" value="{{$edit_events->qua_tang_thuong}}">
                            @if($errors->has('qua_tang_thuong'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('qua_tang_thuong')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Quà tặng khi mua vé VIP</label>
                        <div class="form-input">
                            <input type="text" name="vi_tri_ve_vip" placeholder="Quà tặng khi mua vé VIP" value="{{$edit_events->vi_tri_ve_vip}}">
                            @if($errors->has('qua_tang_vip'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('qua_tang_vip')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Ngày diễn ra sự kiện</label>
                        <div class="form-input">
                            <input name="ngay_dien_ra" type="date" value="{{$edit_events->ngay_dien_ra}}">
                            @if($errors->has('ngay_dien_ra'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('ngay_dien_ra')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Giờ diễn ra</label>
                        <div class="form-input">
                            <input name="thoi_gian" type="time" style="    border: 1px solid #ffd800;
                            border-radius: 5px;
                            background: none;
                            padding: 10px;
                            width: 100%;
                            color: #ffd800;
                            font-size: 18px;" value="{{$edit_events->thoi_gian}}">
                            @if($errors->has('thoi_gian'))
                                <span class="error" style="text-align: left !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('thoi_gian')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Giới thiệu( Hiển thị đoạn giới thiệu trên Slide & SK Nổi bật )</label><br />
                        <div class="form-input">
                        <textarea class="form-control" rows="3" cols="100"  name="tom_tat" value="">{{$edit_events->tom_tat}}</textarea>
                            @if($errors->has('tom_tat'))
                                <span class="error" style="text-align: center !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                    {{$errors->first('tom_tat')}}
                                </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nội dung sự kiện</label>
                        <textarea class="form-control ckeditor" id="editor"  rows="3" cols="10"  name="mo_ta" value="{{$edit_events->mo_ta}}"></textarea>
                        @if($errors->has('mo_ta'))
                            <span class="error" style="text-align: center !important; display: block; color: red;font-family: K2D,sans-serif;line-height: 1.3; font-size: 18px; padding-top: 5px;margin: 0;">
                                {{$errors->first('mo_ta')}}
                            </span>
                        @endif
                    </div>

                </div>
                <button class="btn" type="submit">SỬA SỰ KIỆN</button>
            </form>
        </div>
    </section>
</main>

<script>
    ClassicEditor
        .create( document.querySelector('#editor'))
        .catch( error => {
            console.error( error );
        });
    ClassicEditor
        .create( document.querySelector('#editor1'))
        .catch( error => {
            console.error( error );
        });
</script>

@endsection