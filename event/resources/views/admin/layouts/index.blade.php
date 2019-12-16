
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <link rel="shortcut icon" type="image/png" href="images/favicon/favicon.png">
    <title>A Event | Admin</title>
    <base href="{{asset('')}}">
    <link href="css_admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css_admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="css_admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="css_admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css_admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css_admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="css_admin/toastr/toastr.css" rel="stylesheet">
    <link href="css_admin/toastr/toastr.js.map" rel="stylesheet">
    <link href="css_admin/toastr/toastr.min.css" rel="stylesheet">
    <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>
    <style>
    .ck-content{
        min-height: 200px;
    }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layouts.header')

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="css_admin/toastr/toastr.min"></script>
    <script src="css_admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="css_admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="css_admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="css_admin/dist/js/sb-admin-2.js"></script>
    <script src="css_admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="css_admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });

        });
        $("#show").click(function(){
            $(".password").toggle();
        });
    </script>


    @yield('script')
</body>

</html>
