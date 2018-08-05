<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image float-left">
                <img src="theme/images/user2-160x160.jpg" class="rounded" alt="User Image">
            </div>
            <div class="info float-left">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{(Request::is('admin'))?'active':''}}">
                <a href="{{route('homeAdmin')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            </li>
            <li class="treeview {{(Request::is('admin/categories*'))?'active':''}}">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Danh mục</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> Thêm</a></li>
                </ul>
            </li>
            <li class="treeview {{(Request::is('admin/names*'))?'active':''}}">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Tên</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('names.index')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="{{route('names.create')}}"><i class="fa fa-circle-o"></i> Thêm</a></li>
                </ul>
            </li>
            <li class="treeview {{(Request::is('admin/settings/*'))?'active':''}}">
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('settings.index')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="{{route('settings.create')}}"><i class="fa fa-circle-o"></i> Thêm</a></li>
                </ul>
            </li>

            <li class="{{(Request::is('comments/*'))?'active':''}}">
                <a href="{{route('comments.index')}}">
                    <i class="fa ion-ios-chatbubble-outline"></i> <span>Bình luận</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                    class="fa fa-cog fa-spin"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                    class="fa fa-envelope"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                    class="fa fa-power-off"></i></a>
    </div>
</aside>
