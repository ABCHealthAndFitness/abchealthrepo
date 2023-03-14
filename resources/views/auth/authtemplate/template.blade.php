<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('backend/assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">



    <link href="{{ asset('backend/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend/assets/js/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('backend/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{ asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="app">

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <!--  BEGIN CONTENT AREA  -->
            @yield('content')
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->
    </div>
</body>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/app.js') }}"></script>
<script>
$(document).ready(function() {
    App.init();
});
</script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset('backend/plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/dashboard/dash_1.js') }}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</html>