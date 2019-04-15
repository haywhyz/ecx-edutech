<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link href="{{ asset('public/a_backend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('public/a_backend') }}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{ asset('public/a_backend') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('public/a_backend') }}/css/style.css" rel="stylesheet">

    <link href="{{ asset('public/a_backend') }}/css/gr_backend.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
        <br/><br/>
            <h2><b>User Registration</b></h2>
            <p>Lorem Ipsum Dolor Sit Amet.</p>
            <br/><br/>
            <form class="m-t" role="form" method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>  

                <div class="form-group">
                    <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif                   
                </div>

                <div class="form-group">
                    <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                   
                </div>

                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree to the terms and conditions </label></div>
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/') }}/login">Login</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('public/a_backend') }}/js/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('public/a_backend') }}/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('public/a_backend') }}/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
