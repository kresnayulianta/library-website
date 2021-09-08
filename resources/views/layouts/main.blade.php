<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ucwords(config('app.name')) }} | @yield('title')</title>

    @include('layouts._styles')
</head>

<body
    class="hold-transition {{ Cache::get('dark-mode', true) ? 'dark-mode' : '' }} sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        @include('layouts._navbar')

        @include('layouts._sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @include('layouts._content-header')

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts._control-sidebar')

        @include('layouts._main-footer')
    </div>
    <!-- ./wrapper -->

    @include('layouts._javascripts')

    <!-- PAGE PLUGINS -->
    @push('javascript')
        <!-- jQuery Mapael -->
        <script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('assets/js/demo.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('assets/js/pages/dashboard2.js') }}"></script>
    @endpush

</body>

</html>
