@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thêm Tin Tức
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/new/them" method="POST" enctype="multipart/form-data" >
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tiêu đề tin</label>
                                <input class="form-control" name="tieu_de" placeholder="Nhập tiệu đề tin" />
                            </div>
                            <div class="form-group">
                                <label>Thể loại tin tức</label>
                            <select class="form-control" name="loai_tin" >
                                    @foreach($loaitin as $loaitin)
                                        <option value="{{$loaitin->id}}">{{$loaitin->ten_loai}}</option>
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
                            </div>


                            <div class="form-group">
                                <label>Nội dung tin</label>
                                <textarea class="form-control ckeditor" id="editor1"  rows="3" cols="10"  name="noi_dung"></textarea>
                                @if($errors->has('noi_dung'))
                                    <span class="error">
                                        {{$errors->first('noi_dung')}}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Tin tức nổi bật </label>
                                <label class="radio-inline">
                                <input name="noi_bat" value="0" type="radio" checked="">Không
                                </label>
                                <label class="radio-inline">
                                <input name="noi_bat" value="1" type="radio" >Có
                                </label>
                            </div>


                            <button type="submit" class="btn btn-success">+ THÊM</button>
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
