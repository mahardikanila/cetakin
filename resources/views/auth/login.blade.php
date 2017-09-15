{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Login</div>--}}

{{--<div class="panel-body">--}}
{{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<label for="password" class="col-md-4 control-label">Password</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<div class="checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-8 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--Login--}}
{{--</button>--}}

{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--Forgot Your Password?--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login/Sign-In</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="public/login/css/style.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


</head>

<body>
<div class="logmod">
    {{--<img src="{{asset('public/img/cetakin_black.png')}}" style="align-content: center; padding-bottom: -100px;">--}}
    <div class="logmod__wrapper">
        {{--<span class="logmod__close">Hai</span>--}}
        <div class="logmod__container">
            <ul class="logmod__tabs">
                <li data-tabtar="lgm-2"><a href="#">Login</a></li>
                <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
            </ul>
            <div class="logmod__tab-wrapper">
                <div class="logmod__tab lgm-1">
                    <div class="logmod__heading">
                        <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
                    </div>
                    <div class="logmod__form">
                        <form method="POST" action="{{ route('register') }}" class="simform">
                            {{ csrf_field() }}

                            <div class="sminputs">
                                <div class="input full{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="email" class="string optional">Name</label>
                                    <input id="name" type="text" class="string optional" name="name"
                                           value="{{ old('name') }}" required autofocus autofocus size="50"
                                           maxlength="255" placeholder="Name">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="sminputs">
                                <div class="input full{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="string optional">E-Mail Address</label>
                                    <input id="email" type="email" class="string optional" name="email"
                                           value="{{ old('email') }}" required autofocus size="50" maxlength="255"
                                           placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="sminputs">
                                <div class="input string optional{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="string optional">Password</label>
                                    <input id="password" type="password" class="string optional" size="50"
                                           maxlength="255" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input string optional">
                                    <label for="password-confirm" class="string optional">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="string optional"
                                           name="password_confirmation" required size="50"
                                           placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="simform__actions">
                                <button class="sumbit" name="commit" type="submit">Create Account</button>
                                <span class="simform__actions-sidetext">By creating an account you agree to our <a
                                            class="special" href="#" target="_blank"
                                            role="link">Terms & Privacy</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="logmod__alter">
                        <div class="logmod__alter-container">
                            <a href="login/facebook" class="connect facebook">
                                <div class="connect__icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <div class="connect__context">
                                    <span>Create an account with <strong>Facebook</strong></span>
                                </div>
                            </a>

                            <a href="login/google" class="connect googleplus">
                            <div class="connect__icon">
                            <i class="fa fa-google-plus"></i>
                            </div>
                            <div class="connect__context">
                            <span>Create an account with <strong>Google+</strong></span>
                                {{--<span>Coming <strong>Soon</strong></span>--}}
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="logmod__tab lgm-2">
                    <div class="logmod__heading">
                        <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
                    </div>
                    <div class="logmod__form">
                        <form class="simform" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="sminputs">
                                <div class="input full{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="string optional">E-Mail Address</label>
                                    <input id="email" type="email" class="string optional" name="email"
                                           value="{{ old('email') }}" required autofocus size="50" maxlength="255"
                                           placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="sminputs">
                                <div class="input full{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="string optional">Password</label>
                                    <input id="password" type="password" class="string optional" size="50"
                                           maxlength="255" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <span class="hide-password">Show</span>
                                </div>
                            </div>
                            <div class="simform__actions">
                                <button class="sumbit" name="commit" type="submit">Login</button>
                                {{--<input class="sumbit" name="commit" type="sumbit" value="Log In"/>--}}
                                <span class="simform__actions-sidetext"><a class="special" role="link"
                                                                           href="{{ route('password.request') }}">Forgot your password?<br>Click here</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="logmod__alter">
                        <div class="logmod__alter-container">
                            <a href="login/facebook" class="connect facebook">
                                <div class="connect__icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <div class="connect__context">
                                    <span>Sign in with <strong>Facebook</strong></span>
                                </div>
                            </a>
                            <a href="login/google" class="connect googleplus">
                            <div class="connect__icon">
                            <i class="fa fa-google-plus"></i>
                            </div>
                            <div class="connect__context">
                            <span>Sign in with <strong>Google+</strong></span>
                            {{--<span>Coming <strong>Soon</strong></span>--}}
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="public/login/js/index.js"></script>

</body>
</html>

