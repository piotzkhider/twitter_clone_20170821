<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Entypo CSS -->
    <link href="{{ asset('css/entypo.css') }}" rel="stylesheet">

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
</head>
<body class="application">

<nav class="navbar navbar-toggleable-sm fixed-top navbar-guest">
    <div class="container">
        <button
                class="navbar-toggler navbar-toggler-right hidden-md-up"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ url('login') }}">Laratweet</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            {{--<ul class="navbar-nav mr-auto">--}}
            <ul class="navbar-nav ml-auto">
                <li class="active">
                    <a class="nav-link" href="{{ url('login') }}">
                        <span class="icon icon-login"></span> ログイン
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('register') }}">
                        <span class="icon icon-plus"></span> 登録
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container pt-4">
    <div class="row">
        <div class="offset-lg-3 col-lg-6">
            <section class="card mb-4">
                <div class="card-header" style="background-color: white">
                    <h1>ログイン</h1>
                </div>

                <div class="card-block">
                    <form method="POST" action="{{ url('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group row {{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="offset-2 col-8">
                                <input name="email" type="text" value="{{ old('email') }}"
                                       class="form-control form-control-danger"
                                       placeholder="E-Mail" required autofocus>

                                @if ($errors->has('email'))
                                    <div class="form-control-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="offset-2 col-8">
                                <input name="password" type="password" class="form-control form-control-danger"
                                       placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <div class="form-control-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-2 col-8">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input name="remember" type="checkbox"
                                               class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                        ログインを継続する
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-2 col-8">
                                <button type="submit" class="btn btn-primary">
                                    ログイン
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>
