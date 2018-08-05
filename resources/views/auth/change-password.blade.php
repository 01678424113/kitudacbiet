<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="theme/images/favicon.ico">

    <title>Fox Admin - Log in </title>
    <base href="{{asset('')}}">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="theme/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="theme/assets/vendor_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="theme/assets/vendor_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="theme/css/master_style.css">

    <!-- foxadmin Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="theme/css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="js/bootstrap-toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="theme/index.html"><b>Fox</b>Admin</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <form action="{{ route('doChangePassword') }}" method="post" class="form-element">
            {{csrf_field()}}

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" disabled class="form-control" placeholder="Email" name="email" value="{{ Auth::user()->email }}"
                       required autofocus>
                <span class="ion ion-email form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password mới" name="password" required>
                <span class="ion ion-locked form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">Đổi mật khẩu</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
        </div>
        <!-- /.social-auth-links -->


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="theme/assets/vendor_components/jquery/dist/jquery.min.js"></script>

<!-- popper -->
<script src="theme/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="theme/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

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

</body>
</html>

