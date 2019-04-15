<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="{{ asset('public/a_backend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{ asset('public/a_backend') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('public/a_backend') }}/css/style.css" rel="stylesheet">

    <link href="{{ asset('public/a_backend') }}/css/gr_backend.css" rel="stylesheet">

    <!-- <link href="{{ asset('public') }}/css/app.css" rel="stylesheet"> -->

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
        <br/><br/>
            <h2><b>User login</b></h2>
            <p>Lorem Ipsum Dolor Sit Amet.</p>
            <br/><br/>
            <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail Address" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                @endif

                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/') }}/register">Register</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('public/a_backend') }}/js/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('public/a_backend') }}/js/bootstrap.min.js"></script>

</body>

</html>
