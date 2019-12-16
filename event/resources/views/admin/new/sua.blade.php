@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sửa Tin Tức
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/new/sua/{{$news->id}}" method="POST" enctype="multipart/form-data" >
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tiêu đề tin<!--  --></label>
                                <input class="form-control" value="{{$news->tieu_de}}" name="tieu_de" placeholder="Nhập tiệu đề tin" />
                                @if($errors->has('tieu_de'))
                                    <span class="error">
                                        {{$errors->first('tieu_de')}}
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label>Thể loại tin tức</label>
                            <select class="form-control" name="loai_tin" >
                                             @foreach($loaitin as $loaitin)
                                                <option
                                                    @if($news->loai_tin == $loaitin->id )
                                                        {{"selected"}}
                                                    @endif
                                                    value="{{$loaitin->id}}">{{$loaitin->ten_loai}}
                                                </option>
                                            @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh Banner tin tức</label>
                                <input class="form-control" name="banner" type="file"/>
                                @if($errors->has('banner'))
                                    <span class="error">
                                        {{$errors->first('banner')}}
                                    </span>
                                @endif
                                <img width="300px" src="images/news/{{$news->banner}}" alt="">
                            </div>
                            <div class="form-group">
                                <label>Nội dung tin</label>
                                <textarea class="form-control ckeditor" id="editor1" value=""  rows="3" cols="10"  name="noi_dung">{{$news->noi_dung}}</textarea>
                                @if($errors->has('noi_dung'))
                                    <span class="error">
                                        {{$errors->first('noi_dung')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Tin nổi bật </label>
                                <label class="radio-inline">
                                <input name="noi_bat" value="0" type="radio"
                                @if($news->noi_bat ==0)
                                    {{"checked"}}
                                    @endif
                                 checked="">Không
                                </label>
                                <label class="radio-inline">
                                <input name="noi_bat" value="1"
                                @if($news->noi_bat ==1)
                                    {{"checked"}}
                                    @endif
                                type="radio" >Có
                                </label>
                            </div>


                            <button type="submit" class="btn btn-success">+ Sửa</button>
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
