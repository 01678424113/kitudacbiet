<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="theme/images/favicon.ico">

    <title>Fox Admin - Dashboard</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="theme/assets/vendor_components/bootstrap/dist/css/bootstrap.css">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="theme/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="theme/assets/vendor_components/font-awesome/css/font-awesome.css">

    <!-- ionicons -->
    <link rel="stylesheet" href="theme/assets/vendor_components/Ionicons/css/ionicons.css">

    <!-- theme style -->
    <link rel="stylesheet" href="theme/css/master_style.css">

    <!-- fox_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="theme/css/skins/_all-skins.css">

    <!-- weather weather -->
    <link rel="stylesheet" href="theme/assets/vendor_components/weather-icons/weather-icons.css">

    <!-- jvectormap -->
    <link rel="stylesheet" href="theme/assets/vendor_components/jvectormap/jquery-jvectormap.css">

    <!-- date picker -->
    <link rel="stylesheet" href="theme/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="theme/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="theme/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">

    <link rel="stylesheet" href="css/style-admin.css">

    <link rel="stylesheet" href="js/bootstrap-toastr/toastr.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    @yield('style')

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.layouts.header')
<!-- Control Sidebar Toggle Button -->
    <div>
        <button class="control-sidebar-btn btn btn-dark" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i>
        </button>
    </div>
    <!-- Left side column. contains the logo and sidebar -->
@include('admin.layouts.main-sidebar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
@include('admin.layouts.footer')

<!-- Control Sidebar -->
    <!-- /.control-sidebar -->
@include('admin.layouts.control-sidebar')
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="theme/assets/vendor_components/jquery/dist/jquery.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="theme/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="theme/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="theme/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

<!-- ChartJS -->
<script src="theme/assets/vendor_components/chart-js/chart.js"></script>

<!-- Sparkline -->
<script src="theme/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>

<!-- jvectormap -->
<script src="theme/assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="theme/assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- jQuery Knob Chart -->
<script src="theme/assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>

<!-- daterangepicker -->
<script src="theme/assets/vendor_components/moment/min/moment.min.js"></script>
<script src="theme/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- datepicker -->
<script src="theme/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="theme/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

<!-- Slimscroll -->
<script src="theme/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="theme/assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- fox_admin App -->
<script src="theme/js/template.js"></script>

<!-- fox_admin dashboard demo (This is only for demo purposes) -->
<script src="theme/js/pages/dashboard.js"></script>

<!-- fox_admin for demo purposes -->
<script src="theme/js/demo.js"></script>

<!-- weather for demo purposes -->
<script src="theme/assets/vendor_plugins/weather-icons/WeatherIcon.js"></script>

<script src="theme/js/pages/data-table.js"></script>
<!-- This is data table -->
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

<!-- start - This is for export functionality only -->
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
<script src="theme/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<!-- DataTables -->
<script src="theme/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="theme/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript">

    WeatherIcon.add('icon1', WeatherIcon.SLEET, {stroke: false, shadow: false, animated: true});
    WeatherIcon.add('icon2', WeatherIcon.SNOW, {stroke: false, shadow: false, animated: true});
    WeatherIcon.add('icon3', WeatherIcon.LIGHTRAINTHUNDER, {stroke: false, shadow: false, animated: true});

</script>
<script src="js/bootstrap-toastr/toastr.min.js"></script>
<script type="text/javascript">
    toastr.options = {
        closeButton: true,
        debug: false,
        positionClass: "toast-top-right",
        onclick: null,
        showDuration: "1000",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
    };
    @if (Session::has('error'))
        toastr['error']('{!! Session::get("error") !!}');
    @elseif(Session::has('success'))
        toastr['success']('{!! Session::get("success") !!}');
    @elseif(Session::has('warning'))
        toastr['warning']('{!! Session::get("warning") !!}');
    @endif
</script>
@yield('script')

</body>
</html>
