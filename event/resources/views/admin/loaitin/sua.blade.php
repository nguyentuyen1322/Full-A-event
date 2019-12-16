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
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))

                            <div class="alert alert-success">  {{session('thongbao')}}</div>

                        @endif

                        <form action="admin/loaitin/sua/{{$loaitin->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <!-- để truyền dữ liệu phải cho nó 1 cái token -->
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" name="ten_loai" placeholder="Nhập tên danh mục" value="{{$loaitin->ten_loai}}"/>
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
