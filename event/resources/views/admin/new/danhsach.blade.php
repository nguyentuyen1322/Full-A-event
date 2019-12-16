@extends('admin.layouts.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                        <h1 class="page-header">
                            Danh Sách Tin Tức
                        </h1>
                        </center>
                    </div>
                </div>
                <!-- /.row -->



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
                                    <th>Tiêu đề</th>
                                    <th>Loại tin</th>
                                    <th>Banner
                                   </th>
                                    <th>Ngày đăng</th>
                                    <th>Nội dung</th>
                                    <th>Nổi bật</th>

                                </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <?php $tintucs = $tintuc; ?>
                                @foreach($tintuc as $tintuc)
                                <tbody>
                                        <td>
                                            <a href="admin/new/sua/{{$tintuc->id}}"><img src="images/edit.png" alt="A-event" srcset="" width="40" height="40"></a>
                                        </td>
                                        <td>
                                            <a href="admin/new/xoa/{{$tintuc->id}}"><img src="images/xoa.png" alt="A-event" srcset="" width="40" height="40"></a>
                                        </td>
                                        <td>{{$tintuc->id}}</td>
                                        <td>{{$tintuc->tieu_de}}</td>
                                        <td>{{$tintuc->loaitin->ten_loai}}</td>
                                        <td><img src="images/news/{{$tintuc->banner}}" width="120"  height="50"/></td>
                                        <td>
                                        <?php
                                        $d=strtotime($tintuc->created_at);
                                        echo "" . date("d-m-Y", $d);
                                        ?>

                                        </td>
                                        <td>
                                            <textarea cols="30" rows="3" style="text-align: center !important"> {{$tintuc->noi_dung}}</textarea>
                                        </td>
                                        <td>
                                        @if($tintuc->noi_bat == 1 )
                                            {{"Cho phép"}}
                                        @else
                                        {{"Không"}}
                                        @endif
                                    </td>



                                </tbody>
                                @endforeach
                                <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                    {{$tintucs->links()}}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection
