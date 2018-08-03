<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="theme/images/favicon.ico">

    <title>Fox Admin - Log in </title>

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

</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href=""><b>Fox</b>Admin</a>
    </div>
    <form action="{{ route('register') }}" method="post" class="form-element">

        {{csrf_field()}}
        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>
                <span class="ion ion-person form-control-feedback "></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                <span class="ion ion-email form-control-feedback "></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="ion ion-locked form-control-feedback "></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                <span class="ion ion-log-in form-control-feedback "></span>
            </div>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
            </div>
            <!-- /.social-auth-links -->

            <div class="margin-top-20 text-center">
                <p>Already have an account?<a href="{{route('login')}}" class="text-info m-l-5"> Login</a></p>
            </div>

        </div>

    </form>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->


<!-- jQuery 3 -->
<script src="theme/assets/vendor_components/jquery/dist/jquery.min.js"></script>

<!-- popper -->
<script src="theme/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="theme/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>


