<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ ucwords(config('app.name')) }} | @yield('title')</title>

    @include('layouts._styles')

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}">{{ ucwords(config('app.name')) }}</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                @yield('content')

            </div>
        </div>
    </div>
    <!-- /.login-box -->

    @include('layouts._javascripts')

</body>

</html>
