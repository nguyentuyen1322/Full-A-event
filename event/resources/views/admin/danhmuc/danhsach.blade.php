@extends('admin.layouts.index')


@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách danh mục
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
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
                                    <th>STT</th>
                                    <th>Tên danh mục</th>
                                    <th colspan="2">Thao tác</th>
                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                @foreach($danhmuc as $danhmuc)
                                <tr class="table-info">
                                    <th>{{$danhmuc->id}}</th>
                                    <td>{{$danhmuc->ten_loai}}</td>
                                    <th>
                                       <a href="admin/danhmuc/sua/{{$danhmuc->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                    <th>
                                        <a href="admin/danhmuc/xoa/{{$danhmuc->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                    </th>
                                </tr>
                                @endforeach
                                </tbody>
                                <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
