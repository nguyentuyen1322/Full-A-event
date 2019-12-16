@extends('admin.layouts.index')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row" style="display: flex; justify-content: center;">
                <div class="col-lg-2 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-th fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            @if (isset($type_events))
                                                <?=count($type_events)?>
                                            @else
                                                0 
                                            @endif
                                        </div>
                                        <div>Danh mục</div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel-footer">
                                <a href="{{url('admin/danhmuc/danhsach')}}">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                        </div>
                    </div>
            <div class="col-lg-2 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-cube fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    @if (isset($event))
                                        <?=count($event)?>
                                    @else
                                        0 
                                    @endif
                                </div>
                                <div>Sự Kiện</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer">
                            <a href="{{url('admin/event/danhsach')}}">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        @if (isset($news))
                                            <?=count($news)?>
                                        @else
                                            0 
                                        @endif
                                    </div>
                                    <div>Tin Tức</div>
                                </div>
                            </div>
                        </div>
                            <div class="panel-footer">
                                <a href="{{url('admin/new/danhsach')}}">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                    </div>
                </div>
            <div class="col-lg-2 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    @if (isset($users))
                                        <?=count($users)?>
                                    @else
                                        0 
                                    @endif
                                </div>
                                <div>Account</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer">
                            <a href="{{url('admin/user/danhsach')}}">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="panel panel-tim">
                    <div class="panel-heading add_color">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-ticket fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                 @if(isset($bills))
                                 <?=count($bills)?>
                                 @else
                                    0
                                @endif
                                </div>
                                <div>Bills</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer">
                            <a href="{{url('admin/booking/danhsach')}}">
                                <span class="pull-left color">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right color"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <i class="fa fa-area-chart"></i> Biểu đồ Thống Kê
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="box_content">
                            <div class="chart_grid">
                                <div class="col_group col_group_1">
                                    <div class="col pink_col">
                                        <div class="numb gray">
                                            <b>
                                                @if (isset($type_events))
                                                    <?=count($type_events)?>
                                                @else
                                                    0 
                                                @endif
                                            </b>
                                        </div>
                                    </div>
                                    <div class="col blue_col">
                                        <div class="numb gray">
                                            <b>
                                                @if (isset($event))
                                                    <?=count($event)?>
                                                @else
                                                    0 
                                                @endif
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_group col_group_2">
                                    <div class="col yellow_col">
                                        <div class="numb gray">
                                            <b>
                                                @if (isset($news))
                                                    <?=count($news)?>
                                                @else
                                                    0 
                                                @endif
                                            </b>
                                        </div>
                                    </div>
                                    <div class="col red_col">
                                        <div class="numb gray">
                                            <b>
                                                @if (isset($users))
                                                    <?=count($users)?>
                                                @else
                                                    0 
                                                @endif
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_group col_group_3">
                                    <div class="col order_col">
                                        <div class="numb gray">
                                            <b>
                                                @if(isset($bills))
                                                    <?=count($bills)?>
                                                @else
                                                    0
                                                @endif
                                            </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="legend">
                                    <span class="note1 gray"><b>Danh Mục</b></span>
                                    <span class="note2 gray"><b>Sự Kiện</b></span>
                                    <span class="note3 gray"><b>Tin Tức</b></span>
                                    <span class="note4 gray"><b>Account</b></span>
                                    <span class="note5 gray"><b>Bills</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading"> <i class="fa fa-map-marker" aria-hidden="true"></i> Bản đồ định vị</div>
                    <div class="panel-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31349.475067529627!2d106.64898336515017!3d10.835447706639965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529078b51e6eb%3A0x28bd5bd9f01a1edc!2zR8OyIFbhuqVwLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1575892005491!5m2!1svi!2s" width="363" height="360" frameborder="0" style="border:0;" allowfullscreen="" style="background-color: #000; opacity: 0.5"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection