<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('admin/dashboard') }}">A Event | Admin</a>
        </div>
        <!-- /.navbar-header -->
        @if(Auth::user())
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
        @endif
        <!-- /.navbar-top-links -->
        @include('admin.layouts.menu')
        <!-- /.navbar-static-side -->
    </nav>
