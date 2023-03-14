<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/css/loader.css') }}" />
    <link href="{{ asset('backend/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend/assets/js/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('backend/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/apps/contacts.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>

<body>

    <div id="app">

        <!-- BEGIN MAIN HEADER  -->
        @include('backend.layout.mainHeader')
        <!--  END MAIN HEADER  -->

        <!--  BEGIN SUB HEADER  -->
        @include('backend.layout.subHeader')
        <!--  END SUB HEADER  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            @include('backend.layout.sidebar')
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            @yield('content')
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->
    </div>

</body>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('backend/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}"></script>
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
<script src="{{ asset('backend/assets/js/dashboard/dash_2.js') }}"></script>
<script src="{{ asset('backend/assets/js/apps/contact.js') }}"></script>
<script src="{{ asset('backend/plugins/highlight/highlight.pack.js') }}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</html>