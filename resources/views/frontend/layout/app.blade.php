<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABC Health and Fitness</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="HTML, CSS, JavaScript, Health, Fitness, Health and Fitness, Dublin, ABC, Exercise, ">
    <meta name="description" content="ABC Health and Fitness, Dublin health and fitness">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet"  type="text/css" href="{{ asset('frontend/css/shedulestyle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/logo2.png') }}" />
    <style>
    .wow:first-child {
        visibility: hidden;
    }
    </style>
</head>

<body>

    <div id="app2">

        <!-- BEGIN MAIN HEADER  -->
        @include('frontend.layout.header')
        <!--  END MAIN HEADER  -->

        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!--  END CONTENT AREA  -->

    </div>

</body>

<!--jquery-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $(".ham-burger, .nav ul li a").click(function() {
        $(".nav").toggleClass("open")
        $("ham-burger").toggleClass("active");
    })
    $(".accordian-container").click(function() {
        $(".accordian-container").children(".body").slideUp();
        $(".accordian-container").removeClass("active")
        $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down")
            .addClass("fa-angle-up")
        $(this).children(".body").slideDown();
        $(this).addClass("active")
        $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
    })
    $(".nav ul li a, .go-down").click(function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html,body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });

            //add active class in navigation
            $(".nav ul li a").removeClass("active")
            $(this).addClass("active")
        }
    })
})
</script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script>
wow = new WOW({
    animateClass: 'animated',
    offset: 0,

});
wow.init();
</script>

</html>