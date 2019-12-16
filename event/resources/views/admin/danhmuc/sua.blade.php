@extends('admin.layouts.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sửa danh mục
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thongbao'))
                            <div class="alert alert-success">  {{session('thongbao')}}</div>
                        @endif

                        <form action="admin/danhmuc/sua/{{$danhmuc->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input class="form-control" name="ten_loai" placeholder="Nhập tên danh mục" value="{{$danhmuc->ten_loai}}"/>
                                        @if($errors->has('ten_loai'))
                                            <span class="error">
                                                {{$errors->first('ten_loai')}}
                                            </span>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">+ SỬA</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
